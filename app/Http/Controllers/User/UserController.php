<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Profile;
use DB;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        return view('profile.index')->with('user', $user);
    }

}
