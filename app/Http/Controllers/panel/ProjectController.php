<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectStoreRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Department;
use App\Models\Photo;
use App\Models\Position;
use App\Models\Project;
use App\Models\ProjectDependency;
use App\Models\ProjectManagerAdmin;
use App\Models\Task;
use App\Models\User;
use App\Services\ProjectService;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ProjectController extends Controller
{
    public ProjectService $projectService;
    public function __construct(ProjectService $projectService)
    {
        $this->projectService = new ProjectService();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = auth()->user();

//        if ($user->hasRole('project_manager')) {
//            $projects = Project::where('manager_id', $user->id)->get();
//        }
//
//        elseif ($user->hasRole('project_admin')) {
//            $managerIds = ProjectManagerAdmin::where('admin_id', $user->id)
//                ->pluck('project_manager_id');
//            $projects = Project::whereIn('manager_id', $managerIds)->get();
//        }



        $projects = Project::with(['manager','category','department','members','photos','brand'])->where('manager_id',Auth::id())->paginate(9);
        $project_id = Project::with(['manager','category','department','members','photos','brand'])->where('manager_id',Auth::id())->pluck('id')->toArray();
        $last_projects = Project::with(['manager','category','department','members','photos','brand'])->where('manager_id',Auth::id())->take(3)->latest()->get();

        return view('proMan.projects.index',get_defined_vars());
    }


    public function report()
    {
        $projects = Project::with(['manager','category','department','members','photos','brand'])->where('manager_id',Auth::id())->latest()->get();
        $project_id = Project::with(['manager','category','department','members','photos','brand'])->where('manager_id',Auth::id())->pluck('id')->toArray();
        $last_projects = Project::with(['manager','category','department','members','photos','brand'])->where('manager_id',Auth::id())->take(3)->latest()->get();
        $departments = Department::all();
        $brands = Brand::all();

        $excludedRoles = ['Manager'];

        $managers = User::whereHas('roles', function ($query) use ($excludedRoles) {
            $query->whereIn('name', $excludedRoles);
        })->whereStatus('1')->latest()->get();

        return view('proMan.projects.report',get_defined_vars());
    }

    public function task(Project $project)
    {
        $SuperAdminRoles = ['Super Admin'];
        $excludedRoles = ['Manager'];
        $memberRoles = ['Member'];

        $managers = User::whereHas('roles', function ($query) use ($excludedRoles) {
            $query->whereIn('name', $excludedRoles);
        })->whereStatus('1')->latest()->get();

        $members = User::whereDoesntHave('roles', function ($query) use ($SuperAdminRoles) {
            $query->whereIn('name', $SuperAdminRoles);
        })->whereStatus('1')->latest()->get();

        $projects = Project::get();;

        $watchers = User::whereDoesntHave('roles', function ($query) use ($SuperAdminRoles) {
            $query->whereIn('name', $SuperAdminRoles);
        })->whereStatus('1')->latest()->get();
        $item_tasks = Task::with(['project','manager','watcher','assigners','photos','predecessors','successors'])->where('project_id',$project->id)->paginate(15);


        $columns = [
            0 => ['title' => 'در حال بررسی', 'color' => 'warning'],
            1 => ['title' => 'برای انجام', 'color' => 'primary'],
            2 => ['title' => 'در حال انجام', 'color' => 'success'],
            3 => ['title' => 'انجام شد', 'color' => 'secondary'],
        ];

        $tasks = Task::with(['project','manager','watcher','assigners','photos','parent','children'])->whereNull('parent_id')->where('project_id',$project->id)->get()->groupBy('status');
        $tb_tasks = Task::with(['children'=>with(['assigners' => with(['photo'])])],['project','manager','watcher','assigners','photos','parent'])->whereNull('parent_id')->where('project_id',$project->id)->get();
        return view('proMan.projects.tasks',get_defined_vars());
    }

    public function file(Project $project)
    {
        $tasks = Task::with(['photos','project'])->where('project_id',$project->id)->get();
        $task_files = [];
        foreach ($tasks as $task)
        {
            $task_files = $task->photos?->toArray();
        }
        $files_array = array_merge($task_files , $project->photos->toArray());

        $collection = collect($files_array);
        $currentPage = request()->get('page', 1);
        $perPage = 10;

        $currentPageItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $resultFiles = new LengthAwarePaginator(
            $currentPageItems,
            $collection->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('proMan.projects.files',get_defined_vars());
    }
    public function member(Project $project)
    {
        $memberRoles = ['Member'];
        $members = User::whereHas('roles', function ($query) use ($memberRoles) {
            $query->whereIn('name', $memberRoles);
        })->whereStatus('1')->latest()->get();
        $project_members = $project->members()->paginate(9);
        return view('proMan.projects.members',get_defined_vars());

    }

    public function activity(Project $project)
    {
        $tasks = Task::with('project')->where('id',$project->id)->pluck('id')->all();
        $activities = Activity::whereIn('subject_type',[Project::class,Task::class])->whereIn('subject_id',$tasks)->paginate(12);
        return view('proMan.projects.activity',get_defined_vars());
    }

    public function dependency(Project $project)
    {
        $projectDependencies = ProjectDependency::where('project_id',$project->id)->paginate(12);
        return view('proMan.projects.projectDependency',get_defined_vars());
    }

    public function comment(Project $project)
    {
        $tasks = Task::with(['photos','project','comments.user.photo'])->where('project_id',$project->id)->get();
        $task_comments = [];
        foreach ($tasks as $key => $task_comment)
        {
            $task_comments = $task_comment->comments?->toArray();
        }

        $comments_array = array_merge($task_comments , $project->comments?->toArray());
        $comment_collection = collect($comments_array);
        $total_comments = collect($comments_array)->count();


        $currentPage = request()->get('page', 1);
        $perPage = 10;

        $currentPageItems = $comment_collection->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $resultComments = new LengthAwarePaginator(
            $currentPageItems,
            $comment_collection->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('proMan.projects.comments',get_defined_vars());
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $excludedRoles = ['Manager'];
        $memberRoles = ['Super Admin'];
        $managers = User::whereHas('roles', function ($query) use ($excludedRoles) {
            $query->whereIn('name', $excludedRoles);
        })->whereStatus('1')->latest()->get();

        $categories = Category::with('getChid')->get();
        $departments = Department::get();

        $members = User::whereDoesntHave('roles', function ($query) use ($memberRoles) {
            $query->whereIn('name', $memberRoles);
        })->whereStatus('1')->latest()->get();

        $brands = Brand::with(['photo','getChid'])->get();
        return view('proMan.projects.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectStoreRequest $request)
    {

//            DB::beginTransaction();
//            $photos = explode(',', $request->input('photos')[0]);
        $project = $this->projectService->store($request->all());
        return redirect(route('dashboard.project.redirect',$project->id))->with('flash_message', 'با موفقیت ایجاد شد');
        try {
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    public function redirect(Project $project)
    {
        return view('proMan.projects.redirect',get_defined_vars());
    }
    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $tasks = Task::with(['photos','project','comments.user.photo'])->where('project_id',$project->id)->get();
        $task_files = [];
        foreach ($tasks as $task)
        {
            $task_files = $task->photos?->toArray();
        }
        $files_array = array_merge($task_files , $project->photos->toArray());
        $file_collection = collect($files_array)->take(5);
        $total_files = collect($files_array)->count();


        $task_comments = [];
        foreach ($tasks as $key => $task_comment)
        {
            $task_comments = $task_comment->comments?->toArray();
        }

        $comments_array = array_merge($task_comments , $project->comments?->toArray());
        $comment_collection = collect($comments_array)->take(5);
        $total_comments = collect($comments_array)->count();

        $project_id = Project::with(['manager','category','department','members','photos','brand'])->where('manager_id',Auth::id())->pluck('id')->toArray();

//        $tasks = Task::with(['project','manager','watcher','assigners','photos','predecessors','successors'])->where('project_id',$project->id)->paginate(15);


        $total = $project->tasks?->count();
        $pending = $project->tasks?->where('status', 0)->count();
        $todo = $project->tasks?->where('status', 1)->count();
        $in_progress = $project->tasks?->where('status', 2)->count();
        $Done = $project->tasks?->where('status', 3)->count();

        $days = [];

        for ($i = 0; $i < 10; $i++) {
            $date = Carbon::today()->addDays($i);
            $tasks = Task::whereDate('start_date', verta($date)->format('Y/m/d'))
                ->get();

            $days[] = [
                'date' => verta($date),
                'weekday' => verta($date)->format('D'),
                'tasks' => $tasks
            ];
        }
        return view('proMan.projects.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $excludedRoles = ['Manager'];
        $memberRoles = ['Member'];
        $managers = User::whereHas('roles', function ($query) use ($excludedRoles) {
            $query->whereIn('name', $excludedRoles);
        })->whereStatus('1')->latest()->get();

        $categories = Category::with('getChid')->get();
        $brands = Brand::with(['photo','getChid'])->get();

        $departments = Department::get();
        $members = User::whereHas('roles', function ($query) use ($memberRoles) {
            $query->whereIn('name', $memberRoles);
        })->whereStatus('1')->latest()->get();
        return view('proMan.projects.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        try {
            $this->projectService->update($request->all(),$project);
            return redirect(route('dashboard.project.show',$project->id))->with('flash_message', 'با موفقیت ویرایش شد');

        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    public function option(Request $request,Project $project)
    {
        try {
            $this->projectService->option($request->all(),$project);
            return redirect(route('dashboard.project.show',$project->id))->with('flash_message', 'با موفقیت افزوده شد');

        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        try {
            $project->delete();
            return redirect(route('proMan.project.index'))->with('flash_message', ' با موفقیت حذف شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', 'خطایی رخ داد مجددا تلاش کنید');
        }
    }


    public function filter(Request $request)
    {
        $query = Project::query();

        if ($request->filled('status_filter'))
        {
            $query->where('status',$request->status_filter);
        }

        if ($request->filled('brand_filter')) {
            $query->where('brand_id', $request->brand_filter);
        }

        if ($request->filled('department_filter')) {
            $query->where('department_id', $request->department_filter);
        }

        if ($request->filled('user_filter')) {
            $query->where('approving_manager', $request->user_filter);
        }

        $excludedRoles = ['Manager'];

        $managers = User::whereHas('roles', function ($query) use ($excludedRoles) {
            $query->whereIn('name', $excludedRoles);
        })->whereStatus('1')->latest()->get();

//        $position = Position::where('title' , 'like' , '%بنیان گذار%')->first();
//
//        $user = User::where('position_id', $position->id)->first();

        if ($request->filled('filter')) {

            switch ($request->filter) {

                case 'approve_verify':
                    $query->where('approve_verify', '0')->where('approve_need', '0');
                    break;

                case 'approve_need':
                    $query->where('approve_need', '0');
                    break;

                case 'approving_manager':
                    $query->where('inform','0');
                    break;


            }
        }

        $projects = $query->latest()->where('manager_id',Auth::id())->get();
        $brands = Brand::all();
        $departments = Department::all();
        return view('proMan.projects.report',get_defined_vars());
    }

    public function approveVerify(Project $project , Request $request)
    {
        try {
        $project->approve_verify = $request->approve_verify;
        $project->update();

            return redirect()->route('dashboard.project.report')->with('flash_message', ' تغییرات اعمال شد');
        } catch (Exception $exception) {
            return redirect()->route('dashboard.project.report')->with('err_message', 'خطایی رخ داد مجددا تلاش کنید');
        }
    }

    public function status(Project $project , Request $request)
    {
        try {
            $project->status = $request->status;
            $project->update();
            return redirect()->route('dashboard.project.report')->with('flash_message', 'وضعیت تغییر کرد');
        } catch (Exception $exception) {
            return redirect()->route('dashboard.project.report')->with('err_message', 'خطایی رخ داد مجددا تلاش کنید');
        }
    }


}
