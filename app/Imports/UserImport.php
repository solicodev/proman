<?php

namespace App\Imports;

use App\Models\Influencer;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Spatie\Permission\Models\Permission;

class UserImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }

    public function model(array $row)
    {

        $user = User::where('mobile',$row['mobile'])->first();
        if (!$user)
        {
            $rand = rand(111111, 999999);

            $user = new User();
            $user->first_name = $row['first_name'];
            $user->last_name = $row['last_name'];
            $user->mobile = $row['mobile'];
            $user->status = 1;
            $user->position_id = $row['position_id'];
            $user->department_id = $row['department_id'];
            $user->personal_id = $rand;
            $user->password = Hash::make($rand);
            $user->save();


            $user->assignRole($row['role_id']);
            switch ($row['role_id']) {
                case '2':
                    $permission_lists = Permission::where('name', 'LIKE', 'manager_%')->pluck('id')->toArray();
                    break;
                case '3':
                    $permission_lists = Permission::where('name', 'LIKE', 'member_%')->pluck('id')->toArray();
                    break;
                case '4':
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
        }

        return $user;

    }
}
