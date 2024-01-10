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
        return view('post.index',compact('posts'));
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
            'title'=>'required|max:300|unique:posts,title',
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
        $post-> fee = $request['fee'];   

        $post-> startdate = $request['startdate'];   
        $post-> enddate = $request['enddate'];   
        $post-> starttime = $request['starttime'];   
        $post-> endtime = $request['endtime'];   
        $post-> attshow = $request['attshow'];   
        $post-> type_id = $request['type_id'];   
        $post-> tag_id = $request['tag_id'];   


        $post-> user_id = $user_id;


        if(file_exists($request['image'])){
            $file = $request['image'];
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid($user_id).$post['id'].$fname;
            $file->move(public_path('assets/img/posts'));

        }

        
        $post-> save();
        return redirect(route('post.index'));
    }

    
    public function show(string $id)
    {
        
    }
  
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);

        $attshows = Status::whereIn('id',[3,4])->get();
        $statuses = Status::whereIn('id',[7,10,11])->get();
        $tag = Tag::where('status_id',3)->get();
        $types = Type::whereIn('id',[1,2])->get();
        return view('post.edit',compact('statuses','types','tags','attshows'));

    }

   
    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            'name' => 'required|unique:post,name',
            'title'=>'required|max:300|unique:posts,title',
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

        $post= Post::findOrFail($id);

        $post-> title = $request['title'];   
        $post-> name = Str::slug($request['name']); 
        $post-> fee = $request['fee'];   

        $post-> startdate = $request['startdate'];   
        $post-> enddate = $request['enddate'];   
        $post-> starttime = $request['starttime'];   
        $post-> endtime = $request['endtime'];   
        $post-> attshow = $request['attshow'];   
        $post-> type_id = $request['type_id'];   
        $post-> tag_id = $request['tag_id'];   
        
        $post-> save();
        return redirect(route('post.index'));
    }


 
    public function destroy(string $id)
    {
        $post= Post::findOrFail($id);
        $post-> delete();
        return redirect()->back();
    }
}
