<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeaveRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Str;

use App\Models\Day;
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
        $leaves = Leave::all();
        return view('leaves.index', compact('leaves'));
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


        $leave = leave::findOrFail($id);
        // dd($leave->checkenroll(1));
        $dayables = $leave->days()->get();
        $comments = Comment::where('commentable_id', $leave->id)->where('commentable_type', 'App\Models\leave')->orderBy('created_at', 'desc')->get();
        // $comments = $leave->comments()->orderBy('updated_at','desc')->get();
        return view('leaves.show', ['leave' => $leave, 'dayables' => $dayables, 'comments' => $comments]);
    }

    public function edit(string $id)
    {
        $leave = Leave::findOrFail($id);
        $attshows = Status::whereIn('id', [3, 4])->get();
        $days = Day::where('status_id', 3)->get();
        $dayables = $leave->days()->get();
        // dd($dayables);
        $statuses = Status::whereIn('id', [7, 10, 11])->get();
        $tags = Tag::where('status_id', 3)->get();
        $types = Type::whereIn('id', [1, 2])->get();
        return view('leaves.edit', compact('leave', 'attshows', 'days', 'dayables', 'statuses', 'tags', 'types'));
    }


    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpg,jpeg,png|max:10024',
            'title' => 'required|max:300|unique:leaves,title,' . $id,
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

        $leave = Leave::findOrFail($id);

        $leave->title = $request['title'];
        $leave->slug = Str::slug($request['title']);
        $leave->content = $request['content'];
        $leave->fee = $request['fee'];
        $leave->startdate = $request['startdate'];
        $leave->enddate = $request['enddate'];
        $leave->starttime = $request['starttime'];
        $leave->endtime = $request['endtime'];
        $leave->type_id = $request['type_id'];
        $leave->tag_id = $request['tag_id'];
        $leave->attshow = $request['attshow'];
        $leave->status_id = $request['status_id'];
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

        //Start Day Action 
        // dd($request['newday_id']);

        if (isset($request['newday_id'])) {

            //remove all day
            foreach ($request['newday_id'] as $key => $value) {
                $dayable = Dayable::where('dayable_id', $leave['id'])->where('dayable_type', $request['dayable_type']);
                $dayable->delete();
            }

            //add renewday 
            foreach ($request['newday_id'] as $key => $value) {
                $renewday = [
                    'day_id' => $request['newday_id'][$key],
                    // 'day_id' => $value,
                    'dayable_id' => $leave['id'],
                    'dayable_type' => $request['dayable_type']
                ];
                Dayable::insert($renewday);
            }
        }

        //End Day Action

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
