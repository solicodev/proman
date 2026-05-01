<?php

namespace App\Services;

use App\Models\Project;
use App\Models\Task;
use App\Models\TaskDependency;
use Carbon\Carbon;
use Exception;
use Hekmatinasser\Verta\Verta;

/**
 * Class TaskSchedulerService.
 */
class TaskSchedulerService
{
    public function scheduleProject($projectId)
    {
        $project = Project::findOrFail($projectId);

        $projectStart = toCarbon($project->start_date) ?? now();

        $tasks = Task::where('project_id', $projectId)
            ->get()
            ->keyBy('id');

        $dependencies = TaskDependency::whereIn('successor_id', $tasks->keys())
            ->get();

        $sorted = $this->topologicalSort($tasks, $dependencies);

        $unscheduled = $tasks->keys()->toArray();

        while (!empty($unscheduled)) {

            $progress = false;

            foreach ($sorted as $taskId) {

                if (!in_array($taskId, $unscheduled)) {
                    continue;
                }

                $task = $tasks[$taskId];

                $taskDeps = $dependencies->where('successor_id', $taskId);

                $startConstraints = [];
                $endConstraints = [];

                $ready = true;

                foreach ($taskDeps as $dep) {

                    $parent = $tasks[$dep->predecessor_id] ?? null;

                    if (!$parent) {
                        $ready = false;
                        break;
                    }

                    $preStart = $parent->start_date ? toCarbon($parent->start_date) : null;
                    $preEnd   = $parent->end_date ? toCarbon($parent->end_date) : null;

                    switch ($dep->relation_type) {

                        case 'FS':
                            if (!$preEnd) { $ready = false; break 2; }
                            $startConstraints[] = $preEnd;
                            break;

                        case 'SS':
                            if (!$preStart) { $ready = false; break 2; }
                            $startConstraints[] = $preStart;
                            break;

                        case 'FF':
                            if (!$preEnd) { $ready = false; break 2; }
                            $endConstraints[] = $preEnd;
                            break;

                        case 'SF':
                            if (!$preStart) { $ready = false; break 2; }
                            $endConstraints[] = $preStart;
                            break;
                    }
                }

                if (!$ready) {
                    continue;
                }


                $duration = (int) $task->duration;

                /**
                 * START calculation
                 */
                $start = count($startConstraints)
                    ? collect($startConstraints)->max()
                    : $projectStart;

                $start = toCarbon($start);

                /**
                 * END calculation
                 */
                if (count($endConstraints)) {

                    $end = collect($endConstraints)->max();
                    $end = toCarbon($end);

                    // backward alignment (for FF/SF)
                    $start = $end->copy()->subDays($duration);

                } else {

                    $end = $start->copy()->addDays($duration);
                }

                /**
                 *  safety correction (prevents inversion)
                 */
                if ($end->lt($start)) {
                    $end = $start->copy()->addDays($duration);
                }

                /**
                 *  save
                 */
                $task->update([
                    'start_date' => $start,
                    'end_date' => $end,
                ]);

                /**
                 *  update runtime state (VERY IMPORTANT)
                 */
                $tasks[$taskId]->start_date = $start;
                $tasks[$taskId]->end_date = $end;

                unset($unscheduled[array_search($taskId, $unscheduled)]);

                $progress = true;
            }

            if (!$progress) {
                throw new \Exception("Circular or invalid dependencies detected");
            }
        }
        }



    /**
     * Topological Sort + Loop detection
     */
    private function topologicalSort($tasks, $dependencies)
    {
        $graph = [];
        $inDegree = [];

        foreach ($tasks as $id => $task) {
            $graph[$id] = [];
            $inDegree[$id] = 0;
        }

        foreach ($dependencies as $dep) {

            if (!$dep instanceof \App\Models\TaskDependency) {
                continue;
            }

            $graph[$dep->predecessor_id][] = $dep->successor_id;
            $inDegree[$dep->successor_id]++;
        }

        $queue = [];

        foreach ($inDegree as $id => $deg) {
            if ($deg === 0) {
                $queue[] = $id;
            }
        }

        $sorted = [];

        while (!empty($queue)) {

            $current = array_shift($queue);
            $sorted[] = $current;

            foreach ($graph[$current] as $neighbor) {
                $inDegree[$neighbor]--;

                if ($inDegree[$neighbor] === 0) {
                    $queue[] = $neighbor;
                }
            }
        }

        if (count($sorted) !== count($tasks)) {
            throw new \Exception("Dependency loop detected!");
        }

        return $sorted;
    }



    // تاریخ
    function addDuration(Carbon $date, $duration, $type)
    {
        return match($type) {
            'minute' => $date->copy()->addMinutes($duration),
            'hour'   => $date->copy()->addHours($duration),
            'day'    => $date->copy()->addDays($duration),
            default  => throw new Exception('Invalid duration type'),
        };
    }
}

