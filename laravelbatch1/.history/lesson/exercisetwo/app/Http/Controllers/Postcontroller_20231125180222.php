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
        $attshows = Status::whereIn('id',[3,4])->get();
        $statuses = Status::whereIn('id',[7,10,11])->get();
        $tag = Tag::where('status_id',3)->get();
        $types = Type::whereIn('id',[1,2])->get();
        return view('post.create',compact('statuses','types','tags'));

    }

   
    public function store(Request $request)
    {
        $this -> validate($request,[
            'name' => 'required|unique:post,name',
            'title'=>'required|max:300|unique:posts',
            'content' => 'required',
            'fee' =>'required',
            'startdate' =>'required',
            'enddate' =>'required',
            'starttime' =>'required',
            'endttime' =>'required:in',
            'type_id' =>'required|in:1,2',
            'tag_id' =>'required',
            'attshow' =>'required|in:3,4',

            'status_id'=>'required:in:7,10,11'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $post= new Post();

        $post-> title = $request['title'];   
        $post-> name = Str::slug($request['name']);    
        $post-> startdate = $request['startdate'];   
        $post-> enddate = $request['enddate'];   
        $post-> starttime = $request['starttime'];   
        $post-> endtime = $request['endtime'];   
        $post-> type_id = $request['type_id'];   


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
