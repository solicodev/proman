<?php

namespace App\Imports;

use App\Models\Influencer;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
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
            $user = new User();
            $user->first_name = $row['first_name'];
            $user->last_name = $row['last_name'];
            $user->mobile = $row['mobile'];
            $user->status = 1;
            $user->position_id = $row['position_id'];
            $user->save();
        }

        return $user;

    }
}
