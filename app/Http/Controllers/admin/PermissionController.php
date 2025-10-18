<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::whereNot('name','Like','dep_%')->get();
        $groupedPermissions = collect($permissions)->groupBy(function($permission) {
            return explode('_', $permission->name)[0];
        });

        return view('admin.permissions.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $permission = new Permission();
            $permission->name = $request->input('name');
            $permission->guard_name  = 'web';
            $permission->save();
            return redirect(route('admin.permission.index'))->with('flash_message', 'با موفقیت ایجاد شد');

        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        try {
            $permission->name = $request->input('name');
            $permission->guard_name  = 'web';
            $permission->update();
            return redirect(route('admin.permission.index'))->with('flash_message', 'با موفقیت ویرایش شد');

        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        try {
            $permission->delete();
            return redirect(route('admin.permission.index'))->with('flash_message', 'با موفقیت حذف شد');

        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }
}
