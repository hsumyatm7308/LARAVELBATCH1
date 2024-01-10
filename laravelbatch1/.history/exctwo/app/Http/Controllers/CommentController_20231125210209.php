<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
        $user = Auth::user();
        $user_id = $user->id;

        Comment::create([

        ]);
    }
}
