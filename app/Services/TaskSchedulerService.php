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

    public function createDependency(array $data)
    {
        return DB::transaction(function () use ($data) {
            $pre = Task::findOrFail($data['predecessor_id']);
            $succ = Task::findOrFail($data['successor_id']);

            // اگر relation_type ارسال نشده بود، تشخیص خودکار
            $data['relation_type'] = $data['relation_type'] ?? $this->detectRelationType($pre, $succ);

            // اگر lag ارسال نشده بود، خودکار محاسبه می‌کنیم
            $data['lag'] = $data['lag'] ?? $this->calculateLag($pre, $succ, $data['relation_type']);

            $dependency = TaskDependency::create($data);

            $this->updateSuccessorDates($dependency);

            return $dependency;
        });
    }

    public function detectRelationType(Task $pre, Task $succ): string
    {
        if ($pre->end_date <= $succ->start_date) return 'FS';
        if ($pre->start_date <= $succ->start_date) return 'SS';
        if ($pre->end_date <= $succ->end_date) return 'FF';
        return 'SF';
    }

    public function calculateLag(Task $pre, Task $succ, string $type): int
    {
        $preStart = Carbon::parse($pre->start_date);
        $preEnd   = Carbon::parse($pre->end_date);
        $succStart = Carbon::parse($succ->start_date);
        $succEnd   = Carbon::parse($succ->end_date);

        return match($type) {
            'FS' => $preEnd->diffInDays($succStart, false),
            'SS' => $preStart->diffInDays($succStart, false),
            'FF' => $preEnd->diffInDays($succEnd, false),
            'SF' => $preStart->diffInDays($succEnd, false),
            default => 0
        };
    }

    public function updateSuccessorDates(TaskDependency $dep)
    {
        $pre = $dep->predecessor;
        $succ = $dep->successor;
        $lag = $dep->lag;
        $duration = $succ->duration;

        $preStart = Carbon::parse($pre->start_date);
        $preEnd   = Carbon::parse($pre->end_date);

        switch ($dep->relation_type) {
            case 'FS':
                $newStart = $preEnd->copy()->addDays($lag);
                $succ->start_date = $newStart;
                $succ->end_date   = $newStart->copy()->addDays($duration);
                break;
            case 'SS':
                $newStart = $preStart->copy()->addDays($lag);
                $succ->start_date = $newStart;
                $succ->end_date   = $newStart->copy()->addDays($duration);
                break;
            case 'FF':
                $newEnd = $preEnd->copy()->addDays($lag);
                $succ->end_date   = $newEnd;
                $succ->start_date = $newEnd->copy()->subDays($duration);
                break;
            case 'SF':
                $newEnd = $preStart->copy()->addDays($lag);
                $succ->end_date   = $newEnd;
                $succ->start_date = $newEnd->copy()->subDays($duration);
                break;
        }

        $succ->save();

        // cascade update successors
        foreach ($succ->successors as $childDep) {
            $this->updateSuccessorDates($childDep);
        }
    }
}

