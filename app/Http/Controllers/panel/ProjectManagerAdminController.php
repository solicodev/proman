<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\ProjectManagerAdmin;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectManagerAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = ProjectManagerAdmin::where('project_manager_id',Auth::id())->get();
        return view('proMan.user.admin_list', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $SuperAdminRoles = ['Super Admin'];

        $users = User::whereDoesntHave('roles', function ($query) use ($SuperAdminRoles) {
            $query->whereIn('name', $SuperAdminRoles);
        })->whereStatus('1')->latest()->get();

        return view('proMan.user.add_admin',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $admin = new ProjectManagerAdmin();
            $admin->project_manager_id = Auth::id();
            $admin->admin_id = $request->admin_id;
            $admin->save();

            return redirect()->route('dashboard.list.admin')->with('flash_message', 'با موفقیت ایجاد شد');
        } catch (Exception $exception) {
            return redirect()->route('dashboard.list.admin')->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectManagerAdmin $projectManagerAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectManagerAdmin $projectManagerAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectManagerAdmin $projectManagerAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectManagerAdmin $projectManagerAdmin)
    {
        try {
            $projectManagerAdmin->save();
            return redirect()->route('dashboard.list.admin')->with('flash_message', 'با موفقیت حذف شد');
        } catch (Exception $exception) {
            return redirect()->route('dashboard.list.admin')->with('err_message', $exception->getMessage());
        }
    }
}
