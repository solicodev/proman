<?php

namespace App\Services;

use App\Events\TaskChanged;
use App\Models\Photo;
use App\Models\Project;
use App\Models\Task;
use App\Models\TaskDependency;
use App\Models\User;
use App\Notifications\TaskAssignedNotification;
use Carbon\Carbon;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

/**
 * Class TaskPanelService.
 */
class TaskPanelService
{

    public function store(array $param) :Task
    {
//        $start = Carbon::parse($param['start_date']);
//        $end   = Carbon::parse($param['end_date']);
//
//        $days = (int) $start->diffInDays($end);
//
//        if ($days >= 1) {
//            $duration = $days . ' روز';
//        } else {
//            $hours = $start->diffInHours($end);
//            $duration = $hours . ' ساعت';
//        }


        $rand = rand(111111, 999999);
//        $end_date = Carbon::parse($param['start_date'] ?? null)->addDays(intval($param['duration']))->format('Y/m/d');

        $task = new Task();
        $task->task_code = 'T_' . $rand;
        $task->title = $param['title'];
        $task->description = $param['description'] ?? null;
        $task->priority = $param['priority'];
        $task->parent_id = $param['parent_id'] ?? null;

        if (isset($param['estimated_hours']))
        {
            $task->estimated_hours = $param['estimated_hours'];
        }
        if (isset($param['duration_type']))
        {
            $task->duration_type = $param['duration_type'];
        }
        if (isset($param['duration']))
        {
            $task->duration = $param['duration'];
        }

        $duration = $task->duration . $task->duration_type;

//        $task->start_date = $param['start_date'];
//        $task->end_date = $param['end_date'] ?? null;

        $task->project_id = $param['project_id'] ?? null;
        $task->user_id = Auth::user()->id ?? null;

        if (isset($param['manager_check']))
        {
            $task->manager_check = $param['manager_check'] ?? null;
            $task->manager_id = $param['manager_id'] ?? null;

            $manager = User::where('id', $param['manager_id'])->first();
            //TODO
            $message = $manager->Name . ' تسک ' .$task->task_code .' نیاز به تایید دارد لطفا به پنل خود سر بزنید و تیک تایید را بزنید ' ;
//            sendSms($manager->mobile, $message);
        }

        $task->watcher_id = $param['watcher_id'] ?? null;
//        $task->duration = intval($param['duration']);
        $task->save();
        if (!empty($param['task_id']))
        {
            for ($i = 0; $i < count($param['task_id']); $i++)
            {
                $task_dependency = new TaskDependency();
                $task_dependency->predecessor_id = $param['task_id'][$i];
                $task_dependency->successor_id  = $task->id;
                $task_dependency->relation_Type = $param['relation_type'][$i];
                $task_dependency->save();
            }
        }

//        if (!empty($param['task_id'])) {
//            foreach ($param['task_id'] as $index => $predecessorId) {
//                TaskDependency::create([
//                    'predecessor_id' => $predecessorId,
//                    'successor_id'   => $task->id,
//                    'relation_type'  => $param['relation_type'][$index],
////                        'lag'            => $param['lag'][$index] ?? 0,
//                ]);
//            }
//        }
//        if(isset($param['photos']))
//        {
//            for($i = 0; $i<count($param['photos']); $i++)
//            {
//                $photo = new Photo();
//                $photo->path = file_store($param['photos'][$i], 'uploads/tasks/', '');
//                $photo->name = $param['photos'][$i];
//                $photo->user_id = Auth::id();
//                $photo->save();
//                $task->photos()->attach($photo);
//            }
//        }

        for ($i = 0; $i < count($param['members']); $i++)
        {
            $task->assignments()->create([
                'user_id' => $param['members'][$i],
                'hours_per_day' => $param['hours_per_day'][$i],
            ]);
        }

//        foreach ($param['members'] as $member)
//        {
//            $task->assignments()->create([
//                'user_id' => $member['user_id'],
//                'hours_per_day' => $member['hours_per_day'],
//            ]);
//        }


        foreach ($param['members'] as $member)
        {
            $member_item = User::findOrFail($member);
            //TODO
            $message = $member_item->Name . ' تسک ' .$task->task_code .' برای انجام به شما محول شده است لطفا به پنل خود سر بزنید. مدت زمان انجام این تسک ' . $duration . '  است';
//            sendSms($member_item->mobile, $message);
        }

        // notification
        $users = User::whereIn('id',$param['members'])->get();
        $excludedRoles = ['Super Admin','Admin Panel'];
        $admins = User::whereHas('roles', function ($query) use ($excludedRoles) {
            $query->whereIn('name', $excludedRoles);
        })->latest()->get();
        $recipients = $users->merge($admins);

        // TODO task scheduler service start

        event(new TaskChanged($task->project_id));
        Notification::send($recipients, new TaskAssignedNotification($task));
        return $task;
    }

    public function storeSubtask(array $param, Task $parentTask) :Task
    {

//        $start = Carbon::parse($param['start_date']);
//        $end   = Carbon::parse($param['end_date']);
//
//        $days = (int) $start->diffInDays($end);
//
//        if ($days >= 1) {
//            $duration = $days . ' روز';
//        } else {
//            $hours = $start->diffInHours($end);
//            $duration = $hours . ' ساعت';
//        }


//        $end_date = Carbon::parse($param['start_date'] ?? null)->addDays(intval($param['duration']))->format('Y/m/d');
        $rand = rand(111111, 999999);
        $task = new Task();
        $task->task_code = 'T_' . $rand;
        $task->title = $param['title'];
        $task->description = $param['description'] ?? null;
        $task->priority = $param['priority'];
        $task->parent_id = $parentTask->id;

        if (isset($param['duration_type']))
        {
            $task->duration_type = $param['duration_type'];
        }
        if (isset($param['duration']))
        {
            $task->duration = $param['duration'];
        }

        $duration = $task->duration . $task->duration_type;

//        $task->start_date = $param['start_date'];
//        $task->end_date = $end_date;
//        $task->end_date = $param['end_date'] ?? null;

        $task->project_id = $param['project_id'] ?? null;

        if ($param['sub_manager_check'])
        {
            $task->manager_check = $param['sub_manager_check'] ?? null;
            $task->manager_id = $param['sub_manager_id'] ?? null;

            $manager = User::where('id', $param['sub_manager_id'])->first();
            //TODO

            $message = $manager->Name . 'تسک ' .$task->task_code .'نیاز به تایید دارد لطفا تیک تایید را بزنید' ;
            sendSms($manager->mobile, $message);
        }

        $task->watcher_id = $param['watcher_id'];
//        $task->duration = intval($param['duration']);
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
        foreach ($param['members'] as $member)
        {
            $member_item = User::where('id',$member)->first();
            //TODO
            $message = $member_item->Name . ' تسک ' .$task->task_code .' برای انجام به شما محول شده است لطفا به پنل خود سر بزنید. مدت زمان انجام این تسک ' . $duration . ' روز است';
            sendSms($member_item->mobile, $message);
        }
        return $task;
    }



}
