<?php

namespace App\Services;

use App\Models\Photo;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

/**
 * Class TaskService.
 */
class TaskService
{
    public function store(array $param)
    {
        $task = new Task();
        $task->title = $param['title'];
        $task->description = $param['description'];
        $task->priority = $param['priority'];
        $task->parent_id = $param['parent_id'];
        $task->start_date = $param['start_date'];
//        $task->end_date = $param['end_date'];
        $task->project_id = $param['project_id'];
        $task->manager_id = $param['manager_id'];
        $task->watcher_id = $param['watcher_id'];
        $task->save();

        if($param['photos'])
        {
            for($i = 0; $i<count($param['photos']); $i++)
            {
                $photo = new Photo();
                $photo->path = file_store($param['photos'][$i], 'assets/uploads/tasks/', '');
                $photo->name = $param['photos'][$i];
                $photo->user_id = Auth::id();
                $photo->save();
                $task->photos()->attach($photo);
            }
        }

        $task->assigners()->attach($param['assigners']);

        return $task;
    }

    public function update(array $param , Task $task)
    {
        $task->title = $param['title'];
        $task->description = $param['description'];
        $task->priority = $param['priority'];
        $task->parent_id = $param['parent_id'];
        $task->start_date = $param['start_date'];
//        $task->end_date = $param['end_date'];
        $task->project_id = $param['project_id'];
        $task->manager_id = $param['manager_id'];
        $task->watcher_id = $param['watcher_id'];
        $task->update();

        if($param['photos'])
        {
            for($i = 0; $i<count($param['photos']); $i++)
            {
                $photo = new Photo();
                $photo->path = file_store($param['photos'][$i], 'assets/uploads/tasks/', '');
                $photo->name = $param['photos'][$i];
                $photo->user_id = Auth::id();
                $photo->save();
                $task->photos()->sync($photo);
            }
        }

        $task->assigners()->sync($param['assigners']);

        return $task;
    }
}
