<?php

namespace App\Services;

use App\Models\Task;
use App\Models\TaskAllocation;
use Carbon\Carbon;
/**
 *مسئول scheduling
 */
class ResourceSchedulerService
{
    public function __construct(
        protected ResourceCapacityService $capacityService
    ) {}

    public function schedule(
        Task $task,
        Carbon $startDate
    ): array {

        $remainingHours = $task->estimated_hours;

        $current = $startDate->copy();

        while ($remainingHours > 0) {

            foreach ($task->assignments as $assignment) {

                $user = $assignment->user;

                $available = $this->capacityService
                    ->getAvailableHours($user, $current);

                if ($available <= 0) {
                    continue;
                }

                $allocatable = min(
                    $available,
                    $assignment->hours_per_day,
                    $remainingHours
                );

                if ($allocatable <= 0) {
                    continue;
                }

                TaskAllocation::create([
                    'task_id'   => $task->id,
                    'user_id'   => $user->id,
                    'work_date' => $current->toDateString(),
                    'hours'     => $allocatable,
                ]);

                $remainingHours -= $allocatable;

                if ($remainingHours <= 0) {
                    break;
                }
            }

            $current->addDay();
        }

        $task->update([
            'start_date' => $startDate,
            'end_date'   => $current,
        ]);

        return [
            'start_date' => $startDate,
            'end_date' => $current,
        ];
    }
}
