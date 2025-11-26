<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Department;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Services\ProjectService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $projects = Project::get();
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
        $excludedRoles = ['Manager'];
        $memberRoles = ['Member'];
        $managers = User::whereHas('roles', function ($query) use ($excludedRoles) {
            $query->whereIn('name', $excludedRoles);
        })->whereStatus('1')->latest()->get();

        $categories = Category::get();
        $departments = Department::get();
        $members = User::whereHas('roles', function ($query) use ($memberRoles) {
            $query->whereIn('name', $memberRoles);
        })->whereStatus('1')->latest()->get();
        return view('admin.projects.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->projectService->store($request->all());
            return redirect(route('admin.project.index'))->with('flash_message', 'با موفقیت ایجاد شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
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

        $categories = Category::get();
        $departments = Department::get();
        $members = User::whereHas('roles', function ($query) use ($memberRoles) {
            $query->whereIn('name', $memberRoles);
        })->whereStatus('1')->latest()->get();
        return view('admin.projects.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        try {
            $this->projectService->update($request->all(),$project);
            return redirect(route('admin.project.index'))->with('flash_message', 'با موفقیت ویرایش شد');

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
            return redirect(route('admin.project.index'))->with('flash_message', ' با موفقیت حذف شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', 'خطایی رخ داد مجددا تلاش کنید');
        }
    }
}
