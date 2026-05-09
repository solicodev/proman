<?php

namespace App\Services;

use App\Models\TaskAllocation;
use App\Models\User;
use Carbon\Carbon;

class ResourceCapacityService
{
    /**
     * ساعات مصرف شده کاربر در یک روز
     */
    public function getUsedHours(
        int $userId,
        Carbon $date
    ): float {

        return (float) TaskAllocation::query()
            ->where('user_id', $userId)
            ->whereDate('work_date', $date->toDateString())
            ->sum('hours');
    }

    /**
     * ساعات باقی مانده کاربر
     */
    public function getAvailableHours(
        User $user,
        Carbon $date
    ): float {

        $used = $this->getUsedHours(
            $user->id,
            $date
        );

        return max(
            0,
            $user->daily_capacity_hours - $used
        );
    }

    /**
     * آیا امکان رزرو وجود دارد؟
     */
    public function canAllocate(
        User $user,
        Carbon $date,
        float $hours
    ): bool {

        return $this->getAvailableHours(
                $user,
                $date
            ) >= $hours;
    }

    /**
     * آیا کاربر overload شده؟
     */
    public function isOverloaded(
        User $user,
        Carbon $date
    ): bool {

        return $this->getAvailableHours(
                $user,
                $date
            ) <= 0;
    }

    /**
     * اولین روزی که کاربر ظرفیت دارد
     */
    public function findNextAvailableDate(
        User $user,
        Carbon $startDate,
        float $requiredHours
    ): Carbon {

        $date = $startDate->copy();

        while (true) {

            if (
                $this->canAllocate(
                    $user,
                    $date,
                    $requiredHours
                )
            ) {
                return $date;
            }

            $date->addDay();
        }
    }
}
