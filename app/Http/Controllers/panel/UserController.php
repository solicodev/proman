<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(User $user)
    {
        return view('proMan.user.profile',get_defined_vars());
    }

    public function profileUpdate(User $user, Request $request)
    {

    }
}
