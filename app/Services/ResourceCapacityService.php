<?php

namespace App\Services;

use App\Models\TaskAllocation;
use App\Models\User;
use Carbon\Carbon;

/**
 * Class ResourceCapacityService.
 * ظرفیت کاربران
 */
class ResourceCapacityService
{
    public function getUsedHours(int $userId, Carbon $date): float
    {
        return TaskAllocation::query()
            ->where('user_id', $userId)
            ->whereDate('work_date', $date)
            ->sum('hours');
    }

    public function getAvailableHours(User $user, Carbon $date): float
    {
        $used = $this->getUsedHours($user->id, $date);

        return max(
            0,
            $user->daily_capacity_hours - $used
        );
    }

    public function canAllocate(
        User $user,
        Carbon $date,
        float $hours
    ): bool {

        return $this->getAvailableHours($user, $date) >= $hours;
    }
}
