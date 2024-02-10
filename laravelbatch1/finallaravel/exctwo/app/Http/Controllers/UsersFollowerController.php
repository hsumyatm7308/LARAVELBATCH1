<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UsersFollowerController extends Controller
{
    public function follow(User $user)
    {
        $curloginuser = Auth::user();
        $curloginuser->followings()->attach($user);

        session()->flash('success', 'Follow successfully');
        return redirect()->back();
    }

    public function unfollow(User $user)
    {
        $curloginuser = Auth::user();
        $curloginuser->followings()->detach($user);

        session()->flash('success', 'Unfollow successfully');
        return redirect()->back();
    }
}
