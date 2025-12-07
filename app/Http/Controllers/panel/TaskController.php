<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubTaskStoreRequest;
use App\Http\Requests\TaskStoreRequest;
use App\Models\Project;
use App\Models\Task;
use App\Models\TaskDependency;
use App\Models\User;
use App\Services\TaskPanelService;
use App\Services\TaskScheduler;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity;

class TaskController extends Controller
{

    public TaskPanelService $taskPanelService;
    public function __construct(TaskPanelService $taskPanelService)
    {
        $this->taskPanelService = $taskPanelService;
    }
    public function index()
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


        $watchers = User::whereDoesntHave('roles', function ($query) use ($SuperAdminRoles) {
            $query->whereIn('name', $SuperAdminRoles);
        })->whereStatus('1')->latest()->get();

        $columns = [
            0 => ['title' => 'در حال بررسی', 'color' => 'warning'],
            1 => ['title' => 'برای انجام', 'color' => 'primary'],
            2 => ['title' => 'در حال انجام', 'color' => 'success'],
            3 => ['title' => 'انجام شد', 'color' => 'secondary'],
        ];

        $projects = Project::with('manager','category','department','brand','members','photos','dependencies','comments')->where('manager_id',Auth::id())->pluck('id')->all();;

        $tasks = Task::with(['project','manager','watcher','assigners','photos','predecessors','successors'])->whereNull('parent_id')->whereIn('project_id',$projects)->get()->groupBy('status');
        $tb_tasks = Task::with(['children'=>with(['assigners' => with(['photo'])])],['project','manager','watcher','assigners','photos','parent'])->whereNull('parent_id')->whereIn('project_id',$projects)->get();

        return view('proMan.tasks.tasks',get_defined_vars());
    }

    public function create(Project $project)
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
        $item_tasks = Task::with(['project','manager','watcher','assigners','photos','predecessors','successors'])->where('project_id',$project->id)->paginate(15);

        return view('proMan.tasks.create', get_defined_vars());
    }
    public function store(TaskStoreRequest $request)
    {
        try {
//            DB::beginTransaction();
            $this->taskPanelService->store($request->all());

            return redirect()->route('dashboard.project.redirect',$request->project_id)->with('flash_message', ' تسک با موفقیت ایجاد شد :)');
//            DB::commit();

        } catch (Exception $exception) {
//            DB::rollBack();
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

    // data for modal task show
    public function show($id)
    {
        $task = Task::with(['assigners.photo', 'photos','comments','manager'])->findOrFail($id);
        $task_comments = $task->comments()->orderBy('created_at', 'desc')->get();
        $taskCheck = '';
        $taskCheckVerify = '';
        if ($task->manager_check == 1)
        {
            $taskCheck = 'بله';
        }
        else
            $taskCheck = 'خیر';

        if ($task->manager_verify == 1)
        {
            $taskCheckVerify = 'بله' ;
        }
        else
            $taskCheckVerify = 'خیر';
        try {
            return response()->json([
                'code'        => $task->task_code,
                'id'          => $task->id,
                'title'       => $task->title,
                'status'      => $task->TaskStatus,
                'priority'    => $task->TaskPrority,
                'description' => $task->description,
                'deadline'    => $task->end_date,
                'manager'     => $task->manager?->Name,
                'managerCheck'=> $taskCheck,
                'managerCheckVerify'=> $taskCheckVerify,
                'watcher'     => $task->watcher?->Name,
                'assigners'   => $task->assigners->map(fn($a) => [
                    'name'  => $a->Name,
                    'photo' => $a->photo?->path
                ]),
                'files' => $task->photos->map(fn($p) => [
                    'path'       => $p->path,
                    'created_at' => verta($p->created_at)->formatDifference(),
                    'user_name'  => $p->user?->Name ?? '',
                    'user_role'  => $p->user?->getRoleNames()->first() ?? ''
                ]),
                'comments' => $task_comments->map(fn($comment) => [
                    'text' => $comment->text ?? null,
                    'created_at' => verta($comment->created_at)->formatDifference() ?? null,
                    'name' => $comment->user?->Name ?? null,
                    'photo' => $comment->user?->photo?->path ?? null,
                ])
            ],200);
        }
        catch (Exception $exception) {
            return response()->json([
                'success' => true,
                'err_message' => 'خطایی رخ داده است' . $exception->getMessage(),
            ],500);
        }

    }

    public function getChecklists($id)
    {
        $task = Task::with('taskCheckList')->findOrFail($id);
        try {
            return response()->json(
                $task->taskCheckList->map(fn($c) => [
                    'id' => $c->id,
                    'title' => $c->title,
                    'check' => $c->check,
                ],201)
            );
        }
        catch (Exception $exception) {
            return response()->json([
                'success' => true,
                'err_message' => 'خطایی رخ داده است' . $exception->getMessage(),
            ],500);
        }
    }

    public function addComment(Request $request, Task $task)
    {
        $request->validate([
            'text' => 'required|string|max:1000',
        ]);

        $comment = $task->comments()->create([
            'text' => $request->text,
            'user_id' => auth()->id(),
        ]);
        try {
            return response()->json([
                'success' => true,
                'comment' => [
                    'text' => $comment->text,
                    'created_at' => verta($comment->created_at)->formatDifference(),
                    'name' => $comment->user?->Name,
                    'photo' => $comment->user?->photo?->path,
                ],
            ],201);
        }
        catch (Exception $exception) {
            return response()->json([
                'success' => true,
                'err_message' => 'خطایی رخ داده است' . $exception->getMessage(),
            ],500);
        }
    }

    public function updateStatus(Request $request, Task $task)
    {
        $task->update(['status' => $request->status]);
        try {
            return response()->json([
                'success' => true,
                'flash_message' => 'وضعیت با موفقیت بروزرسانی شد',
                'status'  => $task->status,
            ],201);
        }
        catch (Exception $exception) {
            return response()->json([
                'success' => true,
                'err_message' => 'خطایی رخ داده است' . $exception->getMessage(),
            ],500);
        }
    }

    public function dependency(Task $task , Request $request)
    {
        $exists = TaskDependency::where('successor_id', $task->id)
            ->where('predecessor_id', $request->predecessor_task_id)
            ->exists();

        if ($exists) {
            return response()->json([
                'success' => false,
                'err_message' => 'قبلا وابستگی ثبت شده است! نمیتوانید مجددا وابستگی تعریف کنید!'
            ], 409);
        }

        $task->predecessors()->attach($request->predecessor_task_id, [
            'relation_type' => $request->relation_type,
            'lag' => $request->lag
        ]);
        return response()->json([
            'success' => true,
            'flash_message' => 'وابستگی با موفقیت ثبت شد',
        ],201);
    }

    public function relatedTasks(Task $task)
    {
        if (!$task->parent_id) {
            $result = Task::where('parent_id',$task->id)->get()->map(fn($t) => [
                'id' => $t->id,
                'text' => $t->title,
            ]);
            return response()->json([
                'related' => $result
            ], 200);
        }

        $parentId = $task->parent_id;

        $related = Task::where(function ($query) use ($task, $parentId) {
            $query->where('parent_id', $parentId)
                ->orWhere('id', $parentId);
        })
            ->where('id', '!=', $task->id)
            ->select(['id', 'title'])
            ->get()
            ->map(fn($t) => [
                'id' => $t->id,
                'text' => $t->title,
            ]);

        return response()->json([
            'related' => $related
        ], 200);
    }

    public function taskTimeLine(Project $project)
    {
        $tasks = Task::with(['dependencies', 'children'])->where('project_id', $project->id)->get();


        $groups = [];
        $items  = [];

        foreach ($tasks as $task) {
            $groups[] = [
                'id'      => $task->id,
                'content' => $task->title .'.('. $task->task_code .')',
            ];

            $start = $task->start_date ? Carbon::parse($task->start_date)->toIso8601String() : null;
            $end   = $task->end_date   ? Carbon::parse($task->end_date)->toIso8601String() : null;

            $type = 'box'; // پیش‌فرض
            if ($start && $end) {
                $type = 'range';
            } elseif ($start && !$end) {
                $type = 'point'; // یا 'box' بسته به نیاز
            }

            $items[] = [
                'id'      => $task->id,
                'group'   => $task->id,
                'content' => $task->title,
                'start'   => $start,
                'end'     => $end,
                'type'    => $type,
                'progress'=> intval($task->progress ?? 0),
                'allowed' => intval($task->calculateAllowedProgress() ?? 100),
                'effective'=> intval($task->progress_effective ?? ($task->progress ?? 0)),
                'tree_progress' => intval($task->progress_tree ?? 0),
            ];
        }


        $dependencies = [];

        foreach ($tasks as $task) {
            foreach ($task->dependencies as $dep) {
                $dependencies[] = [
                    'from' => $dep->predecessor_id,
                    'to'   => $dep->successor_id,
                    'type' => $dep->relation_Type,
                    'lag'  => intval($dep->lag ?? 0),
                ];
            }
        }

        return view('proMan.projects.taskTimeLine', [
            'project'      => $project,
            'groupsJson'   => json_encode($groups, JSON_UNESCAPED_UNICODE),
            'itemsJson'    => json_encode($items, JSON_UNESCAPED_UNICODE),
            'depsJson'     => json_encode($dependencies, JSON_UNESCAPED_UNICODE),
        ]);


    }


}
