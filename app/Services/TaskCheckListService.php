<?php

namespace App\Services;

use App\Models\Task;
use App\Models\TaskChecklist;

/**
 * Class TaskCheckListService.
 */
class TaskCheckListService
{
    public function store(array $param, Task $task) : TaskChecklist
    {
        $taskCheckList = new TaskCheckList();
        $taskCheckList->title = $param['title'];
        $taskCheckList->task_id = $task->id;
        $taskCheckList->save();
        return $taskCheckList;
    }
}
