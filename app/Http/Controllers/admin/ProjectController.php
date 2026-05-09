<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Department;
use App\Models\ImplementeUnit;
use App\Models\Photo;
use App\Models\Project;
use App\Models\ProjectApprove;
use App\Models\ProjectDependency;
use App\Models\Task;
use App\Models\User;
use App\Services\ProjectService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity;

class ProjectController extends Controller
{

    public ProjectService $projectService;
    public function __construct(ProjectService $projectService)
    {
        $this->projectService = new ProjectService();
        if (!Auth::user()->hasrole('Super Admin'))
        {
            return redirect()->back()->with('err_message', 'شما دسترسی به پنل ادمین ندارید!');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        $brands = Brand::with(['photo','getChid'])->get();

        $departments = Department::all();

        $excludedRoles = ['Manager'];

        $managers = User::whereHas('roles', function ($query) use ($excludedRoles) {
            $query->whereIn('name', $excludedRoles);
        })->whereStatus('1')->latest()->get();
        return view('admin.projects.index',get_defined_vars());
    }

    public function task(Project $project)
    {
        $tasks = Task::where('project_id',$project->id)->get();
        return view('admin.projects.tasks',get_defined_vars());
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $excludedRoles = ['Manager','Member','Assignee'];
        $memberRoles = ['Super Admin'];
        $managers = User::whereHas('roles', function ($query) use ($excludedRoles) {
            $query->whereIn('name', $excludedRoles);
        })->whereStatus('1')->latest()->get();


        $categories = Category::with('getChid')->get();
        $departments = Department::get();
        $implementeUnits = ImplementeUnit::get();

        $members = User::whereDoesntHave('roles', function ($query) use ($memberRoles) {
            $query->whereIn('name', $memberRoles);
        })->whereStatus('1')->with('position')->latest()->get();

        $brands = Brand::with(['photo','getChid'])->get();
        return view('admin.projects.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $this->projectService->store($request->all());
            return redirect(route('admin.project.index'))->with('flash_message', 'با موفقیت ایجاد شد');
        try {
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $tasks = Task::where('project_id',$project->id)->get();
        return view('admin.projects.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $excludedRoles = ['Manager','Member','Assignee'];
        $memberRoles = ['Member'];
        $managers = User::whereHas('roles', function ($query) use ($excludedRoles) {
            $query->whereIn('name', $excludedRoles);
        })->whereStatus('1')->latest()->get();

        $categories = Category::get();
        $departments = Department::get();
        $implementeUnits = ImplementeUnit::get();
        $members = User::whereDoesntHave('roles', function ($query) use ($memberRoles) {
            $query->whereIn('name', $memberRoles);
        })->whereStatus('1')->with('position')->latest()->get();
        $brands = Brand::with(['photo','getChid'])->get();
        return view('admin.projects.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {

            $this->projectService->update($request->all(),$project);
            return redirect(route('admin.project.index'))->with('flash_message', 'با موفقیت ویرایش شد');
        try {
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
            return redirect()->back()->with('flash_message', ' با موفقیت حذف شد');
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
        return view('admin.projects.index',get_defined_vars());
    }

    public function approveVerify(Project $project , Request $request)
    {

        $project->approve_verify = $request->approve_verify;
        $project->update();

        $projectApprove = new ProjectApprove();
        $projectApprove->title = $request->title ?? null;
        $projectApprove->description = $request->description ?? null;
        $projectApprove->project_id = $project->id;
        if (isset($request->photo_id))
        {
            $photo = new Photo();
            $photo->path = file_store($request->photo_id, 'uploads/project/Approve/', '');
            $photo->user_id = Auth::id();
            $photo->save();
            $projectApprove->photo_id = $photo->id;
        }
        $projectApprove->date = $request->date ?? null;

        $projectApprove->save();

        try {
            return redirect()->route('admin.project.report')->with('flash_message', ' تغییرات اعمال شد');
        } catch (Exception $exception) {
            return redirect()->route('admin.project.report')->with('err_message', 'خطایی رخ داد مجددا تلاش کنید');
        }
    }

    public function status(Project $project , Request $request)
    {
        try {
            $project->status = $request->status;
            $project->update();
            return redirect()->route('admin.project.report')->with('flash_message', 'وضعیت تغییر کرد');
        } catch (Exception $exception) {
            return redirect()->route('admin.project.report')->with('err_message', 'خطایی رخ داد مجددا تلاش کنید');
        }
    }


    public function report()
    {
        $user = auth()->user();
        $projectsAsManager = Project::where('manager_id', $user->id);

        $managerIds = DB::table('project_manager_admins')
            ->where('admin_id', $user->id)
            ->pluck('project_manager_id');

        $projectsAsAdmin = Project::whereIn('manager_id', $managerIds); // ADMINS
        $projectsAsApprovingManager = Project::where('approving_manager', $user->id); //APPROVING MANAGER


        $projects = $projectsAsManager->union($projectsAsAdmin)->union($projectsAsApprovingManager)->with(['manager','category','department','members','photos','brand'])->paginate(9);
        $project_id = $projectsAsManager->union($projectsAsAdmin)->with(['manager','category','department','members','photos','brand']);
        $last_projects = $projectsAsManager->union($projectsAsAdmin)->with(['manager','category','department','members','photos','brand'])->latest()->get();


        $departments = Department::all();
        $brands = Brand::all();

        $excludedRoles = ['Manager'];

        $managers = User::whereHas('roles', function ($query) use ($excludedRoles) {
            $query->whereIn('name', $excludedRoles);
        })->whereStatus('1')->latest()->get();

//        dd($projectsAsAdmin,$projectsAsManager,$last_projects);
        return view('admin.projects.report',get_defined_vars());
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

        return view('admin.projects.files',get_defined_vars());
    }
    public function member(Project $project)
    {
        $memberRoles = ['Member'];
        $members = User::whereHas('roles', function ($query) use ($memberRoles) {
            $query->whereIn('name', $memberRoles);
        })->whereStatus('1')->latest()->get();
        $project_members = $project->members()->paginate(9);
        return view('admin.projects.members',get_defined_vars());

    }

    public function activity(Project $project)
    {
        $task_items = Task::with('project')->where('project_id',$project->id)->pluck('id')->all();
        $activities = Activity::whereIn('subject_type',[Project::class,Task::class])->whereIn('subject_id',$task_items)->paginate(12);
        $tasks = Task::where('project_id',$project->id)->get();
        return view('admin.projects.activity',get_defined_vars());
    }

    public function dependency(Project $project)
    {
        $projectDependencies = ProjectDependency::where('project_id',$project->id)->paginate(12);
        return view('admin.projects.projectDependency',get_defined_vars());
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

        return view('admin.projects.comments',get_defined_vars());
    }
}
