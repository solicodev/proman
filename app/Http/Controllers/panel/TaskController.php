<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubTaskStoreRequest;
use App\Http\Requests\TaskStoreRequest;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Services\TaskPanelService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{

    public TaskPanelService $taskPanelService;
    public function __construct(TaskPanelService $taskPanelService)
    {
        $this->taskPanelService = $taskPanelService;
    }
    public function index(Project $project)
    {
        $SuperAdminRoles = ['Super Admin'];
        $excludedRoles = ['Manager'];
        $memberRoles = ['Member'];

        $managers = User::whereHas('roles', function ($query) use ($excludedRoles) {
            $query->whereIn('name', $excludedRoles);
        })->whereStatus('1')->latest()->get();

        $members = User::whereHas('roles', function ($query) use ($memberRoles) {
            $query->whereIn('name', $memberRoles);
        })->whereStatus('1')->latest()->get();

        $projects = Project::get();;

        $watchers = User::whereDoesntHave('roles', function ($query) use ($SuperAdminRoles) {
            $query->whereIn('name', $SuperAdminRoles);
        })->whereStatus('1')->latest()->get();
        $tasks = Task::with(['project','manager','watcher','assigners','photos','predecessors','successors'])->where('project_id',$project->id)->paginate(15);
        return view('proMan.projects.tasks',get_defined_vars());
    }

    public function create(Project $project)
    {
        return view('proMan.tasks.create', get_defined_vars());
    }
    public function store(TaskStoreRequest $request)
    {
        try {
//            DB::beginTransaction();
            $this->taskPanelService->store($request->all());
            return redirect()->back()->with('flash_message', ' با موفقیت ایجاد شد :)');
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            return redirect()->back()->with('err_message', 'خطایی رخ داد :('.$exception->getMessage());
        }
    }

    public function storeSubtask(SubTaskStoreRequest $request,Task $task)
    {
        try {
            DB::beginTransaction();
            $this->taskPanelService->storeSubtask($request->all(),$task);

            DB::commit();
            return redirect()->back()->with('flash_message', 'زیرتسک با موفقیت ایجاد شد :)');
        } catch (Exception $exception) {
            DB::rollBack();
            return redirect()->back()->with('err_message', 'خطایی رخ داد :('.$exception->getMessage());
        }
    }

    public function update(Request $request, Task $task)
    {
        $data = $request->validate([
            'name' => 'sometimes|string|max:255',
            'start_date' => 'sometimes|date',
            'end_date' => 'sometimes|date|after_or_equal:start_date',
            'duration' => 'nullable|integer|min:0'
        ]);
        $task->update($data);

        return response()->json([
            'message' => 'تسک با موفقیت به‌روزرسانی شد.',
            'data' => $task
        ]);
    }

    public function show($id)
    {
        $task = Task::with(['assigners.photo', 'photos', 'project','manager','watcher','assigners','photos','parent','children','taskCheckList'])->findOrFail($id);

        return response()->json([
            'id'          => $task->id,
            'title'       => $task->title,
            'status'      => $task->TaskStatus,
            'priority'    => $task->TaskPrority,
            'description' => $task->description,
            'deadline'    => verta($task->end_date)->format('Y/m/d'),
            'assigners'   => $task->assigners->map(function ($a) {
                return [
                    'name' => $a->Name,
                    'photo' => $a->photo?->path
                ];
            }),
            'files' => $task->photos->map(function ($p) {
                return [
                    'path' => $p->path,
                    'created_at' => verta($p->created_at)->formatDifference(),
                    'user_name' => $p->user?->Name ?? '',
                    'user_role' => $p->user?->getRoleNames()->first() ?? ''
                ];
            }),
            'checklists' => $task->taskCheckList->map(function ($c) {
                return [
                    'id' => $c->id,
                    'title' => $c->title,
                    'check' => $c->check,
                ];
            })
        ]);
    }




}
