<?php

namespace App\Services;

use App\Models\Photo;
use App\Models\Project;
use App\Models\Task;
use App\Models\TaskDependency;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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

        if (isset($param['project_id']))
        {
            for ($i = 0; $i < count($param['project_id']); $i++)
            {
                $task_dependency = new TaskDependency();
                $task_dependency->predecessor_id = $param['project_id'][$i];
                $task_dependency->successor_id  = $param['project_id'][$i];
                $task_dependency->relation_Type = $param['relation_type'][$i];
                $task_dependency->save();
            }

            if (!empty($param['depends_on'])) {

                foreach ($param['depends_on'] as $index => $predecessorId) {

                    TaskDependency::create([
                        'predecessor_id' => $predecessorId,
                        'successor_id'   => $task->id, // 👈 مهم
                        'relation_type'  => $param['relation_type'][$index] ?? 'FS',
                        'lag'            => $param['lag'][$index] ?? 0,
                    ]);

                }
            }
        }
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
            $message = $member_item->Name . ' تسک ' .$task->task_code .' برای انجام به شما محول شده است لطفا به پنل خود سر بزنید. مدت زمان انجام این تسک ' . $duration . '  است';
//            sendSms($member_item->mobile, $message);
        }
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



    // TODO
    function scheduleTasks($projectId)
    {
        $tasks = Task::where('project_id', $projectId)->get();

        foreach ($tasks as $task) {

            $dependency = TaskDependency::where('successor_id', $task->id)->first();

            if ($dependency) {
                $parent = Task::find($dependency->predecessor_id);

                switch ($dependency->relation_type) {

                    case 'FS':
                        $task->start_date = $parent->end_date->addDays($dependency->lag);
                        break;

                    case 'SS':
                        $task->start_date = $parent->start_date->addDays($dependency->lag);
                        break;

                    case 'FF':
                        $task->end_date = $parent->end_date->addDays($dependency->lag);
                        $task->start_date = $task->end_date->subDays($task->duration);
                        break;
                }

            } else {
                // اگر وابستگی نداره
                $task->start_date = now(); // یا start پروژه
            }

            $task->end_date = $task->start_date->copy()->addDays($task->duration);

            $task->save();
        }
    }
}
