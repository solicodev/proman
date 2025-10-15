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

        //TODO
        $role_item = $param['role_id'];
        $user->assignRole($param['role_id']);
        switch ($role_item) {
            case 'Manager':
                $permission_lists = Permission::where('name', 'LIKE', 'manager_%')->pluck('id')->toArray();
                break;
            case 'Member':
                $permission_lists = Permission::where('name', 'LIKE', 'member_%')->pluck('id')->toArray();
                break;
            case 'Assignee':
                $permission_lists = Permission::where('name', 'LIKE', 'assign_%')->pluck('id')->toArray();
                break;
//            case 'User':
//                $permission_lists = Permission::where('name', 'LIKE', 'manager_%')->pluck('id')->toArray();
//                break;
            default:
                $permission_lists = Permission::where('name', 'LIKE', 'User_%')->pluck('id')->toArray();
                break;
        }

        $user->permissions()->attach($permission_lists);
        return $user;
    }

    public function update(array $param ,User $user)
    {
        $user->first_name = $param['first_name'];
        $user->last_name = $param['last_name'];
        $user->mobile = $param['mobile'];
        $user->personal_id = $param['personal_id'];
        $user->position_id = $param['position_id'] ;
        $user->email= $param['email'];
        $user->password= Hash::make($param['password']);
        $user->update();

        //TODO
        $permission_lists = Permission::where('name', 'LIKE', 'dep_%')->pluck('id')->toArray();
        $user->assignRole($param['role_id']);
        $user->permissions()->attach($permission_lists);

        return $user;
    }
}
