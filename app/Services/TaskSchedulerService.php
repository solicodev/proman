<?php

namespace App\Services;

use App\Models\Task;
use App\Models\TaskDependency;
use Carbon\Carbon;

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
        $tasks = Task::where('project_id', $projectId)
            ->get()
            ->keyBy('id');

        $dependencies = TaskDependency::whereIn('successor_id', $tasks->keys())
            ->get();

        $sorted = $this->topologicalSort($tasks, $dependencies);

        foreach ($sorted as $taskId) {

            $task = $tasks[$taskId];

            $taskDeps = $dependencies->where('successor_id', $taskId);

            $startDates = [];
            $endOverride = null;

            foreach ($taskDeps as $dep) {

                $parent = $tasks[$dep->predecessor_id] ?? null;
                if (!$parent) continue;

                switch ($dep->relation_type) {

                    case 'FS':
                        $startDates[] = $parent->end_date;
                        break;

                    case 'SS':
                        $startDates[] = $parent->start_date;
                        break;

                    case 'FF':
                        $endOverride = $parent->end_date;
                        break;

                    case 'SF':
                        $startDates[] = $parent->end_date;
                        break;
                }
            }


            $start = !empty($startDates)
                ? collect($startDates)->max()
                : now();

            $task->start_date = Carbon::parse($start);


            if ($endOverride) {
                $task->end_date = Carbon::parse($endOverride);
                $task->start_date = $task->end_date
                    ->copy()
                    ->subDays((int)$task->duration);
            } else {
                $task->end_date = $task->start_date
                    ->copy()
                    ->addDays((int)$task->duration);
            }

            $task->saveQuietly();
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
            $graph[$dep->predecessor_id][] = $dep->successor_id;
            $inDegree[$dep->successor_id]++;
        }

        $queue = [];

        foreach ($inDegree as $id => $deg) {
            if ($deg == 0) {
                $queue[] = $id;
            }
        }

        $sorted = [];

        while (!empty($queue)) {

            $current = array_shift($queue);
            $sorted[] = $current;

            foreach ($graph[$current] as $neighbor) {
                $inDegree[$neighbor]--;

                if ($inDegree[$neighbor] == 0) {
                    $queue[] = $neighbor;
                }
            }
        }

        if (count($sorted) !== count($tasks)) {
            throw new \Exception("Dependency loop detected in project!");
        }

        return $sorted;
    }

}

