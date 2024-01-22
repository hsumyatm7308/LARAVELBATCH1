<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeaveRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Str;

use App\Models\Post;
use App\Models\Dayable;
use App\Models\Comment;
use App\Models\Leave;
use App\Models\Status;
use App\Models\Tag;
use App\Models\Type;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LeavesController extends Controller
{
    //


    public function index()
    {
        // $leaves = Leave::paginate(3);
        $data['leaves'] = Leave::filteronly()->searchonly()->paginate(5);
        $data['filterposts'] = Post::whereIn('attshow', [3])->orderBy('title', 'asc')->pluck('title', 'id')->toArray();

        return view('leaves.index', $data);
    }


    public function create()
    {
        $data['posts'] = \DB::table('posts')->where('attshow', 3)->orderBy('title', 'asc')->get()->pluck('title', 'id');
        $data['tags'] = User::orderBy('name', 'asc')->get()->pluck('name', 'id');
        return view('leaves.create', $data);
    }


    public function store(LeaveRequest $request)
    {



        $user = Auth::user();
        $user_id = $user['id'];

        $leave = new Leave();

        $leave->post_id = $request['post_id'];
        $leave->startdate = $request['startdate'];
        $leave->enddate = $request['enddate'];
        $leave->tag = $request['tag'];
        $leave->title = $request['title'];

        $leave->content = $request['content'];

        $leave->user_id = $user_id;

        //Single Image Upload 
        if (file_exists($request['image'])) {
            $file = $request['image'];
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid($user_id) . $leave['id'] . $fname;
            $file->move(public_path('assets/img/leaves/'), $imagenewname);

            $filepath = "assets/img/leaves/" . $imagenewname;
            $leave->image = $filepath;
        }

        $leave->save();


        session()->flash('success', 'New Leave Created');
        return redirect(route('leaves.index'));
    }


    public function show(string $id)
    {
        $data['leave'] = Leave::findOrFail($id);
        $data['posts'] = Post::all();
        $data['tags'] = User::all();
        return view('leaves.show', $data);
    }

    public function edit(string $id)
    {
        $data['leave'] = Leave::findOrFail($id);
        $data['posts'] = Post::all();
        $data['tags'] = User::all();
        return view('leaves.edit', $data);
    }


    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required|max:50' . $id,
            'post_id' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'tag' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:10024',
        ]);


        $user = Auth::user();
        $user_id = $user['id'];

        $leave = Leave::findOrFail($id);

        $leave->post_id = $request['post_id'];
        $leave->startdate = $request['startdate'];
        $leave->enddate = $request['enddate'];
        $leave->tag = $request['tag'];
        $leave->title = $request['title'];

        $leave->content = $request['content'];

        $leave->user_id = $user_id;

        // Remove old Image 
        if ($request->hasFile('image')) {
            $path = $leave->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }


        //Single Image Update 
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid($user_id) . $leave['id'] . $fname;
            $file->move(public_path('assets/img/leaves/'), $imagenewname);

            $filepath = "assets/img/leaves/" . $imagenewname;
            $leave->image = $filepath;
        }

        $leave->save();


        return redirect(route('leaves.index'));
    }



    public function destroy(string $id)
    {
        $leave = Leave::findOrFail($id);
        //Remove Old Imge 
        $path = $leave->image;
        if (File::exists($path)) {
            File::delete($path);
        }

        $leave->delete();
        return redirect()->back();
    }
}
