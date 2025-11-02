<?php

namespace App\Services;

use App\Models\Photo;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Class TaskPanelService.
 */
class TaskPanelService
{
    public function store(array $param)
    {
        $rand = rand(111111, 999999);
        $end_date = Carbon::parse($param['start_date'] ?? null)->addDays(intval($param['duration']))->format('Y/m/d');
        $task = new Task();
        $task->task_code = 'T_' . $rand;
        $task->title = $param['title'];
        $task->description = $param['description'] ?? null;
        $task->priority = $param['priority'];
        $task->parent_id = $param['parent_id'] ?? null;
        $task->start_date = $param['start_date'];
        $task->end_date = $end_date;
        $task->project_id = $param['project_id'] ?? null;

        if ($param['manager_check'])
        {
            $task->manager_check = $param['manager_check'] ?? null;
            $task->manager_id = $param['manager_id'] ?? null;

//            $manager = User::where('id', $param['manager_id'])->first();
//            //TODO
//            $message = $manager->Name . 'تسک ' .$task->task_code .'نیاز به تایید دارد لطفا تیک تایید را بزنید' ;
//            sendSms($manager->mobile, $message);
        }

        $task->watcher_id = $param['watcher_id'];
        $task->duration = intval($param['duration']);
        $task->save();

        if($param['photos'])
        {
            for($i = 0; $i<count($param['photos']); $i++)
            {
                $photo = new Photo();
                $photo->path = file_store($param['photos'][$i], 'uploads/tasks/', '');
                $photo->name = $param['photos'][$i];
                $photo->user_id = Auth::id();
                $photo->save();
                $task->photos()->attach($photo);
            }
        }

        $task->assigners()->attach($param['members']);
        return $task;
    }

    public function storeSubtask(array $param, Task $parentTask)
    {
        $end_date = Carbon::parse($param['start_date'] ?? null)->addDays(intval($param['duration']))->format('Y/m/d');
        $rand = rand(111111, 999999);
        $task = new Task();
        $task->task_code = 'T_' . $rand;
        $task->title = $param['title'];
        $task->description = $param['description'] ?? null;
        $task->priority = $param['priority'];
        $task->parent_id = $parentTask->id;
        $task->start_date = $param['start_date'];
        $task->end_date = $end_date;
        $task->project_id = $param['project_id'] ?? null;

        if ($param['sub_manager_check'])
        {
            $task->sub_manager_check = $param['sub_manager_check'] ?? null;
            $task->sub_manager_id = $param['sub_manager_id'] ?? null;

//            $manager = User::where('id', $param['manager_id'])->first();
//            //TODO
//            $message = $manager->Name . 'تسک ' .$task->task_code .'نیاز به تایید دارد لطفا تیک تایید را بزنید' ;
//            sendSms($manager->mobile, $message);
        }

        $task->watcher_id = $param['watcher_id'];
        $task->duration = intval($param['duration']);
        $task->save();
        if($param['photos'])
        {
            for($i = 0; $i<count($param['photos']); $i++)
            {
                $photo = new Photo();
                $photo->path = file_store($param['photos'][$i], 'uploads/tasks/', '');
                $photo->name = $param['photos'][$i];
                $photo->user_id = Auth::id();
                $photo->save();
                $task->photos()->attach($photo);
            }
        }

        $task->assigners()->attach($param['members']);
        return $task;
    }
}
