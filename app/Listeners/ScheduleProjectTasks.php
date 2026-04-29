<?php

namespace App\Listeners;

use App\Events\TaskChanged;
use App\Services\TaskSchedulerService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ScheduleProjectTasks
{
    /**
     * Create the event listener.
     */
    protected $scheduler;

    public function __construct(TaskSchedulerService $scheduler)
    {
        $this->scheduler = $scheduler;
    }

    public function handle(TaskChanged $event)
    {
        $this->scheduler->scheduleProject($event->projectId);
    }
}
