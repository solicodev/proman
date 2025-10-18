<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use App\Services\ProjectService;
use Exception;
use Illuminate\Http\Request;

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
        $projects = Project::get();
        return view('admin.projects.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $excludedRoles = ['Manager'];
        $managers = User::whereHas('roles', function ($query) use ($excludedRoles) {
            $query->whereIn('name', $excludedRoles);
        })->latest()->get();

        $categories = Category::get();

        return view('admin.projects.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
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
