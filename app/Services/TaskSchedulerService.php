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

//    public function createDependency(array $data)
//    {
//        return DB::transaction(function () use ($data) {
//            $pre = Task::findOrFail($data['predecessor_id']);
//            $succ = Task::findOrFail($data['successor_id']);
//
//            // اگر relation_type ارسال نشده بود، تشخیص خودکار
//            $data['relation_type'] = $data['relation_type'] ?? $this->detectRelationType($pre, $succ);
//
//            // اگر lag ارسال نشده بود، خودکار محاسبه می‌کنیم
//            $data['lag'] = $data['lag'] ?? $this->calculateLag($pre, $succ, $data['relation_type']);
//
//            $dependency = TaskDependency::create($data);
//
//            $this->updateSuccessorDates($dependency);
//
//            return $dependency;
//        });
//    }
//
//    public function detectRelationType(Task $pre, Task $succ): string
//    {
//        if ($pre->end_date <= $succ->start_date) return 'FS';
//        if ($pre->start_date <= $succ->start_date) return 'SS';
//        if ($pre->end_date <= $succ->end_date) return 'FF';
//        return 'SF';
//    }
//
//    public function calculateLag(Task $pre, Task $succ, string $type): int
//    {
//        $preStart = Carbon::parse($pre->start_date);
//        $preEnd   = Carbon::parse($pre->end_date);
//        $succStart = Carbon::parse($succ->start_date);
//        $succEnd   = Carbon::parse($succ->end_date);
//
//        return match($type) {
//            'FS' => $preEnd->diffInDays($succStart, false),
//            'SS' => $preStart->diffInDays($succStart, false),
//            'FF' => $preEnd->diffInDays($succEnd, false),
//            'SF' => $preStart->diffInDays($succEnd, false),
//            default => 0
//        };
//    }

//    public function updateSuccessorDates(TaskDependency $dep)
//    {
//        $pre = $dep->predecessor;
//        $succ = $dep->successor;
//        $lag = $dep->lag;
//        $duration = $succ->duration;
//
//        $preStart = Carbon::parse($pre->start_date);
//        $preEnd   = Carbon::parse($pre->end_date);
//
//        switch ($dep->relation_type) {
//            case 'FS':
//                $newStart = $preEnd->copy()->addDays($lag);
//                $succ->start_date = $newStart;
//                $succ->end_date   = $newStart->copy()->addDays($duration);
//                break;
//            case 'SS':
//                $newStart = $preStart->copy()->addDays($lag);
//                $succ->start_date = $newStart;
//                $succ->end_date   = $newStart->copy()->addDays($duration);
//                break;
//            case 'FF':
//                $newEnd = $preEnd->copy()->addDays($lag);
//                $succ->end_date   = $newEnd;
//                $succ->start_date = $newEnd->copy()->subDays($duration);
//                break;
//            case 'SF':
//                $newEnd = $preStart->copy()->addDays($lag);
//                $succ->end_date   = $newEnd;
//                $succ->start_date = $newEnd->copy()->subDays($duration);
//                break;
//        }
//
//        $succ->save();
//
//        // cascade update successors
//        foreach ($succ->successors as $childDep) {
//            $this->updateSuccessorDates($childDep);
//        }
//    }


    public function scheduleProject($projectId)
    {
        $project = Project::findOrFail($projectId);

        // 🔥 normalize project start
        $projectStart = toCarbon($project->start_date) ?? now();

        // 🔥 load tasks
        $tasks = Task::where('project_id', $projectId)
            ->get()
            ->keyBy('id');

        // 🔥 load dependencies (FLAT - NOT GROUPED)
        $dependencies = TaskDependency::whereIn('successor_id', $tasks->keys())
            ->get();

        // 🔥 build adjacency list (correct structure)
        $dependencyMap = [];

        foreach ($dependencies as $dep) {
            $dependencyMap[$dep->successor_id][] = $dep;
        }

        // 🔥 topological order
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

                $ready = true;

                foreach ($taskDeps as $dep) {

                    $parent = $tasks[$dep->predecessor_id] ?? null;

                    if (!$parent || !$parent->start_date || !$parent->end_date) {
                        $ready = false;
                        break;
                    }

                    $startConstraints[] = $parent->end_date;
                }

                if (!$ready) {
                    continue;
                }

                $start = count($startConstraints)
                    ? collect($startConstraints)->max()
                    : $projectStart;

                $end = $start->copy()->addDays($task->duration);

                $task->update([
                    'start_date' => $start,
                    'end_date' => $end,
                ]);

                $tasks[$taskId] = $task->fresh();

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

