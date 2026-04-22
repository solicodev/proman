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

        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';

        $password = '';
        for ($i = 0; $i < 10; $i++) {
            $password .= $chars[random_int(0, strlen($chars) - 1)];
        }
        $user = new User();
        $user->first_name = $param['first_name'];
        $user->last_name = $param['last_name'];
        $user->mobile = $param['mobile'];
        $user->personal_id = $param['personal_id'];
        $user->position_id = $param['position_id'] ;
        $user->email= $param['email'];

        if (isset($param['password']))
        {
            $user->password= $param['password'];
            $user->password_text= $param['password'];
        }
        else
            $user->password= $password;
            $user->password_text= $password;

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

        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';

        $password = '';
        for ($i = 0; $i < 10; $i++) {
            $password .= $chars[random_int(0, strlen($chars) - 1)];
        }

        $user->first_name = $param['first_name'];
        $user->last_name = $param['last_name'];
        $user->mobile = $param['mobile'];
        $user->personal_id = $param['personal_id'];
        $user->position_id = $param['position_id'] ;
        $user->email= $param['email'];

        if (isset($param['password']))
        {
            $user->password= $param['password'];
            $user->password_text= $param['password'];
        }
        else
            $user->password= $password;
            $user->password_text= $password;

        $user->update();

        //TODO
        if ($param['role_id'])
        {
            $role_item = $param['role_id'];
            $user->assignRole($role_item);
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

            $user->permissions()->sync($permission_lists);
        }


        return $user;
    }
}
