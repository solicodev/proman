<?php

namespace App\Services;

use App\Models\Task;
use Carbon\Carbon;

// Full implementation with FS/SS/FF/SF + LAG based on start/end dates
// This is a standalone service-class style implementation you can adapt.
class TaskScheduler
{
    /**
     * Calculate the allowed start date for a task considering its dependencies
     */
    public static function calculateStartDate(Task $task)
    {
        if ($task->dependencies->count() === 0) {
            return $task->start_date; // no restriction
        }

        $allowedDate = $task->start_date;

        foreach ($task->dependencies as $dep) {
            $source = $dep->dependencyTask;
            $lagDays = intval($dep->lag ?? 0);

            $startA = Carbon::parse($source->start_date);
            $endA   = Carbon::parse($source->end_date);

            $startB = Carbon::parse($task->start_date);

            switch (strtoupper($dep->type)) {

                case 'FS': // B.start >= A.finish + lag
                    $candidate = $endA->copy()->addDays($lagDays);
                    if ($candidate->gt($allowedDate)) {
                        $allowedDate = $candidate;
                    }
                    break;

                case 'SS': // B.start >= A.start + lag
                    $candidate = $startA->copy()->addDays($lagDays);
                    if ($candidate->gt($allowedDate)) {
                        $allowedDate = $candidate;
                    }
                    break;

                case 'FF': // B.finish >= A.finish + lag --> affects B.start
                    $bDuration = Carbon::parse($task->end_date)->diffInDays($startB);
                    $candidateFinish = $endA->copy()->addDays($lagDays);
                    $candidateStart = $candidateFinish->copy()->subDays($bDuration);
                    if ($candidateStart->gt($allowedDate)) {
                        $allowedDate = $candidateStart;
                    }
                    break;

                case 'SF': // B.finish >= A.start + lag --> affects B.start
                    $bDuration = Carbon::parse($task->end_date)->diffInDays($startB);
                    $candidateFinish = $startA->copy()->addDays($lagDays);
                    $candidateStart = $candidateFinish->copy()->subDays($bDuration);
                    if ($candidateStart->gt($allowedDate)) {
                        $allowedDate = $candidateStart;
                    }
                    break;
            }
        }

        return $allowedDate;
    }

    /**
     * Adjust the task dates automatically based on dependency results
     */
    public static function applyScheduling(Task $task)
    {
        $newStart = self::calculateStartDate($task);
        $oldStart = Carbon::parse($task->start_date);

        // if changed, shift task
        if ($newStart->ne($oldStart)) {
            $duration = Carbon::parse($task->end_date)->diffInDays($oldStart);
            $task->start_date = $newStart;
            $task->end_date   = $newStart->copy()->addDays($duration);
            $task->save();
        }
    }
}

