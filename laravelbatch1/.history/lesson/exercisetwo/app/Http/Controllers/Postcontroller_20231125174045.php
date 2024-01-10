<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Type;
use App\Models\Tag;
use App\Models\Status;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('post.index',compact('post'));
    }

  
    public function create()
    {
        $statuses = Status::whereIn('id',[3,4])->get();
        $tag = Tag::where('status_id',3)->get();
        $types = Type::whereIn('id',[1,2])->get();
        return view('post.create',compact('statuses','types','tags'));

    }

   
    public function store(Request $request)
    {
        $this -> validate($request,[
            'name' => 'required|unique:post,name',
            'image'=>'image|mimes:jpg,jpeg,png|max:1024',
            'status_id'=>'required:in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $post= new Post();

        $post-> name = $request['name'];   
        $post-> slug = Str::slug($request['name']);    
        $post-> user_id = $user_id;
        
        $post-> save();
        return redirect(route('post.index'));
    }

    
    public function show(string $id)
    {
        
    }
  
    public function edit(string $id)
    {
    
    }

   
    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            'name' => 'required|unique:post,name,'.$id
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $post= Post::findOrFail($id);

        $post-> name = $request['name'];   
        $post-> slug = Str::slug($request['name']);    
        $post-> user_id = $user_id;
        
        $post-> save();
        return redirect(route('statuses.index'));
    }


 
    public function destroy(string $id)
    {
        $post= Post::findOrFail($id);
        $post-> delete();
        return redirect()->back();
    }
}
