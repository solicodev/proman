<?php

namespace App\Observers;

use App\Models\Task;
use App\Services\TaskSchedulerService;

class TaskObserver
{
    protected TaskSchedulerService $scheduler;

    public function __construct(TaskSchedulerService $scheduler)
    {
        $this->scheduler = $scheduler;
    }

    /**
     * وقتی Task آپدیت شد
     */
    public function updated(Task $task): void
    {
        // فقط زمانی که تاریخ‌ها تغییر کرده باشن
        if ($task->isDirty(['start_date', 'end_date'])) {
            foreach ($task->successors as $dep) {
                $this->scheduler->updateSuccessorDates($dep);
            }
        }
    }
    /**
     * Handle the Task "created" event.
     */
    public function created(Task $task): void
    {
        //
    }

    /**
     * Handle the Task "deleted" event.
     */
    public function deleted(Task $task): void
    {
        //
    }

    /**
     * Handle the Task "restored" event.
     */
    public function restored(Task $task): void
    {
        //
    }

    /**
     * Handle the Task "force deleted" event.
     */
    public function forceDeleted(Task $task): void
    {
        //
    }
}
