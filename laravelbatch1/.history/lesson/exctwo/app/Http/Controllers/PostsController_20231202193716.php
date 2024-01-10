<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Day;
use App\Models\Dayable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

use App\Models\Post;
use App\Models\Status;
use App\Models\Tag;
use App\Models\Type;

class PostsController extends Controller
{
  
    public function index()
    {
        $posts = Post::all();
        return view('posts.index',compact('posts'));
    }

  
    public function create()
    {
        // $post = Post::findOrFail($id);
        $attshows = Status::whereIn('id',[3,4])->get();
        $days = Day::where('status_id',3)->get();
        $statuses = Status::whereIn('id',[7,10,11])->get();
        $tags = Tag::where('status_id',3)->get();
        $types = Type::whereIn('id',[1,2])->get();
        return view('posts.create',compact('attshows','days','statuses','tags','types'));
    }


  
   
    public function store(Request $request)
    {
        $this -> validate($request,[
            'image' => 'image|mimes:jpg,jpeg,png|max:10024',
            'title' => 'required|max:300|unique:posts,title',
            'content' => 'required',
            'fee' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',
            'type_id' => 'required|in:1,2',
            'tag_id' => 'required',
            'attshow' => 'required|in:3,4',
            'status_id' => 'required|in:7,10,11'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $post = new Post();

        $post -> title = $request['title'];  
        $post -> slug = Str::slug($request['title']);   
        $post -> content = $request['content']; 
        $post -> fee = $request['fee']; 
        $post -> startdate = $request['startdate']; 
        $post -> enddate = $request['enddate']; 
        $post -> starttime = $request['starttime']; 
        $post -> endtime = $request['endtime']; 
        $post -> type_id = $request['type_id']; 
        $post -> tag_id = $request['tag_id']; 
        $post -> attshow = $request['attshow'];  
        $post -> status_id = $request['status_id'];
        $post -> user_id = $user_id;

         //Single Image Upload 
         if(file_exists($request['image'])){

            $file = $request['image'];
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid($user_id).$post['id'].$fname;
            $file -> move(public_path('assets/img/posts/'),$imagenewname);

            $filepath = "assets/img/posts/".$imagenewname;
            $post->image = $filepath;
        }
        
        $post -> save();

        // if($post->id){

        //     // create dayable 
        //     if(count($request['day_id']) > 0){
        //         foreach($request['day_id'] as $key=>$value){

        
        //         Dayable::create([
        //             'day_id'=>$request['day_id'][$key],
        //             'dayable_id'=>$post->id,
        //             'dayable_type'=>$request['dayable_type']
        //         ]);
        //     };

        //     }
        // }


        if($post->id){

            // create dayable 
            if(count($request['day_id']) > 0){
                foreach($request['day_id'] as $key=>$value){

        
                $day = [
                    // 'day_id'=>$request['day_id'][$key],
                    'day_id'=>$value,
                    'dayable_id'=>$post->id,
                    'dayable_type'=>$request['dayable_type']
                ];
                Dayable::insert($day);
            };

            }
        }


        return redirect(route('posts.index'));
    }

    
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        // $comment = Comment::where('comentable_id',$post->id)->where('comentable_type','App\Models\Post')->orderBy('created_at','description')->get();
        $comment = $post->comments()->orderBy('updated_at','desc')->get() ;
        return view('posts.show',['post'=>$post,'comments'=>$comment]);
    }
  
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        $attshows = Status::whereIn('id',[3,4])->get();
        $days = Day::where('status_id',3)->get();

        $statuses = Status::whereIn('id',[7,10,11])->get();
        $tags = Tag::where('status_id',3)->get();
        $types = Type::whereIn('id',[1,2])->get();
        return view('posts.edit',compact('post','attshows','days','dayable','statuses','tags','types'));
    }

   
    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            'image' => 'image|mimes:jpg,jpeg,png|max:10024',
            'title' => 'required|max:300|unique:posts,title,'.$id,
            'content' => 'required',
            'fee' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',
            'type_id' => 'required|in:1,2',
            'tag_id' => 'required',
            'attshow' => 'required|in:3,4',
            'status_id' => 'required|in:7,10,11'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $post = Post::findOrFail($id);

        $post -> title = $request['title'];  
        $post -> slug = Str::slug($request['title']);   
        $post -> content = $request['content']; 
        $post -> fee = $request['fee']; 
        $post -> startdate = $request['startdate']; 
        $post -> enddate = $request['enddate']; 
        $post -> starttime = $request['starttime']; 
        $post -> endtime = $request['endtime']; 
        $post -> type_id = $request['type_id']; 
        $post -> tag_id = $request['tag_id']; 
        $post -> attshow = $request['attshow'];  
        $post -> status_id = $request['status_id'];
        $post -> user_id = $user_id;

        // Remove old Image 
        if($request->hasFile('image')){
            $path = $post -> image;
            if(File::exists($path)){
                File::delete($path);
            }
        }


         //Single Image Update 
         if($request -> hasFile('image')){

            $file = $request -> file('image');
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid($user_id).$post['id'].$fname;
            $file -> move(public_path('assets/img/posts/'),$imagenewname);

            $filepath = "assets/img/posts/".$imagenewname;
            $post->image = $filepath;
        }   
        
        $post -> save();
        return redirect(route('posts.index'));
    }


 
    public function destroy(string $id)
    {

        

        $post = Post::findOrFail($id);
        //Remove Old Imge 
        $path = $post -> image;
            if(File::exists($path)){
                File::delete($path);
            }

        $post -> delete();
        return redirect()->back();
    }
}
