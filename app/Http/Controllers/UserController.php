<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        return view('userDetail')->with('user', $user);
    }

    public function edit(User $user)
    {
        return view('editUserDetail')->with('user', $user);
    }

    public function update(User $user)
    {
        $user->profile->update(Input::all());
        // dd($user);
        // return redirect('user/profile/$user->id/index');
    }
}
