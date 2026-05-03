<?php

namespace App\Services;

use App\Events\TaskChanged;
use App\Models\Photo;
use App\Models\Task;
use App\Models\TaskDependency;
use App\Models\User;
use App\Notifications\TaskAssignedNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;

/**
 * Class TaskService.
 */
class TaskService
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
        $task->start_date = $param['start_date'];
        $task->end_date = $param['end_date'] ?? null;
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

        if(isset($param['photos']))
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
            $member_item = User::findOrFail($member);
            //TODO
            $message = $member_item->Name . ' تسک ' .$task->task_code .' برای انجام به شما محول شده است لطفا به پنل خود سر بزنید. مدت زمان انجام این تسک ' . $task->duration . '  است';
//            sendSms($member_item->mobile, $message);
        }
        return $task;
    }

    public function update(array $param , Task $task)
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

//        $task->task_code = 'T_' . $rand;
        $task->title = $param['title'];
        $task->description = $param['description'] ?? null;
        $task->priority = $param['priority'];
        $task->parent_id = $param['parent_id'] ?? null;
//        $task->start_date = $param['start_date'];
//        $task->end_date = $param['end_date'] ?? null;
        if (isset($param['project_id']))
        {
            $task->project_id = $param['project_id'];
        }
//        $task->user_id = Auth::user()->id ?? null;

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
        $task->update();

        if (isset($param['photos'])) {
            foreach ($param['photos'] as $key => $photo) {
                if (isset($task->photos[$key])){
                    File::delete($task->photos[$key]->path);
                    $task->photos[$key]->path = file_store($photo, 'uploads/tasks/', '');
                    $task->photos[$key]->save();
                }else {
                    $ph = new Photo();
                    $ph->path = file_store($photo, 'uploads/tasks/', '');
//                    $ph->name = $photo;
                    $ph->user_id = Auth::id();
                    $task->photos()->save($ph);
                }
            }
        }

        if (isset($param['members']))
        {
            $task->assigners()->sync($param['members']);
        }

        foreach ($param['members'] as $member)
        {
            $member_item = User::findOrFail($member);
            //TODO
            $message = $member_item->Name . ' تسک ' .$task->task_code .' برای انجام به شما محول شده است لطفا به پنل خود سر بزنید. مدت زمان انجام این تسک ' . $task->duration . '  است';
//            sendSms($member_item->mobile, $message);
        }


        if (isset($param['task_id'])) {
            TaskDependency::where('successor_id', $task->id)->delete();

            for ($i = 0; $i < count($param['task_id']); $i++) {
                
                TaskDependency::create([
                    'predecessor_id' => $param['task_id'][$i],
                    'successor_id'   => $task->id,
                    'relation_type'  => $param['relation_type'][$i],
                ]);
            }

            // notification
            $users = User::whereIn('id',$param['members'])->get();

            $excludedRoles = ['Super Admin','Admin Panel'];
            $admins = User::whereHas('roles', function ($query) use ($excludedRoles) {
                $query->whereIn('name', $excludedRoles);
            })->latest()->get();

            $task_user = User::where('id',$task->user_id)->first();
            $recipients = $users
                ->merge($admins)
                ->when($task_user, fn($c) => $c->push($task_user))
                ->unique('id')
                ->values();

//            $recipients = $users->merge($admins,$task_user);
            // TODO task scheduler service start

            event(new TaskChanged($task->project_id));
            Notification::send($recipients, new TaskAssignedNotification($task));
        }


        return $task;
    }
}
