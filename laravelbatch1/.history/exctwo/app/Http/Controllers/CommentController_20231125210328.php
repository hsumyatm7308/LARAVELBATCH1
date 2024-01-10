<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
        $user = Auth::user();
        $user_id = $user->id;

        Comment::create([
            'description' =>$request['description'],
            'user_id' => $request['user_id'],
            'commentable_id' => $request['commentable_id'],
            'commentable_type' => $request['commentable_type'],
        ]);

        return redirect()->back();
    }
}
