<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Models\Position;
use App\Models\User;
use App\Services\UserService;
use Exception;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public UserService $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $excludedRoles = ['Super Admin'];

        $users = User::whereDoesntHave('roles', function ($query) use ($excludedRoles) {
            $query->whereIn('name', $excludedRoles);
        })->latest()->get();

        $permission_lists = Permission::whereNot('name','Like','dep_%')->get();
        $groupedPermissions = collect($permission_lists)->groupBy(function($permission) {
            return explode('_', $permission->name)[0];
        });
//        $users = User::get();
        return view('admin.users.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $positions = Position::get();
        $roles = Role::whereNot('name' , 'Super Admin')->get();
        $permissions = Permission::get();
        return view('admin.users.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        try {
            $this->userService->store($request->all());
            return redirect(route('admin.user.index'))->with('flash_message', 'با موفقیت ایجاد شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $positions = Position::get();
        $roles = Role::whereNot('name' , 'Super Admin')->get();
        $permissions = Permission::get();
        return view('admin.users.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        try {
            $this->userService->update($request->all(),$user);
            return redirect(route('admin.user.index'))->with('flash_message', 'با موفقیت ایجاد شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();
            return redirect(route('admin.user.index'))->with('flash_message', ' با موفقیت حذف شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', 'خطایی رخ داد مجددا تلاش کنید');
        }
    }

    public function status(User $user , Request $request)
    {
        try {
            $user->status = $request->status;
            $user->update();
            return redirect(route('admin.user.index'))->with('flash_message', ' تغییرات اعمال شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', 'خطایی رخ داد مجددا تلاش کنید');
        }
    }

    public function permission(User $user , Request $request)
    {
        try {
            $user->permissions()->sync($request->permissions);
            return redirect(route('admin.user.index'))->with('flash_message', ' تغییرات اعمال شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', 'خطایی رخ داد مجددا تلاش کنید');
        }
    }
}
