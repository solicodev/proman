<?php

namespace App\Services;

use App\Models\Task;
use App\Models\TaskAllocation;
use Carbon\Carbon;

class ResourceSchedulerService
{
    public function __construct(
        protected ResourceCapacityService $capacityService
    ) {}

    /**
     * Schedule Task
     */
    public function schedule(
        Task $task,
        Carbon $startDate
    ): array {

        // TODO
        $remainingHours = $task->estimated_hours;

        $currentDate = $startDate->copy();

        $realStart = null;

        while ($remainingHours > 0) {

            foreach ($task->assignments as $assignment) {

                $user = $assignment->user;

                $availableHours = $this->capacityService
                    ->getAvailableHours(
                        $user,
                        $currentDate
                    );

                if ($availableHours <= 0) {
                    continue;
                }

                $allocatableHours = min(
                    $availableHours,
                    $assignment->hours_per_day,
                    $remainingHours
                );

                if ($allocatableHours <= 0) {
                    continue;
                }

                TaskAllocation::create([
                    'task_id' => $task->id,
                    'user_id' => $user->id,
                    'work_date' => $currentDate->toDateString(),
                    'hours' => $allocatableHours,
                ]);

                if (!$realStart) {
                    $realStart = $currentDate->copy();
                }

                $remainingHours -= $allocatableHours;

                if ($remainingHours <= 0) {
                    break;
                }
            }

            $currentDate->addDay();
        }

        $realEnd = $currentDate->copy()->subDay();

        $task->update([
            'start_date' => $realStart,
            'end_date' => $realEnd,
        ]);

        return [
            'start_date' => $realStart,
            'end_date' => $realEnd,
        ];
    }
}
