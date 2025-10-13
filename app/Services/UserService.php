<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

/**
 * Class UserService.
 */
class UserService
{
    public function store(array $param)
    {
        $user = new User();
        $user->first_name = $param['first_name'];
        $user->last_name = $param['last_name'];
        $user->mobile = $param['mobile'];
        $user->personal_id = $param['personal_id'];
        $user->position_id = $param['position_id'] ;
        $user->email= $param['email'];
        $user->password= Hash::make($param['password']);
        $user->save();

        $permission_lists = Permission::where('name', 'LIKE', 'org_%')->pluck('id')->toArray();
        $user->assignRole($param['role_id']);
        $user->permissions()->attach($permission_lists);

        return $user;
    }
}
