<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LeaveRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Notification;
use App\Notifications\LeaveNotify;


use App\Models\Leave;
use App\Models\User;

class LeavesController extends Controller
{
    public function index()
    {
        $leaves = Leave::all();
        return view('leaves.index',compact('leaves'));
    }


    public function create()
    {
        $data['posts'] = \DB::table('posts')->where('attshow',3)->orderBy('title','asc')->get()->pluck('title','id');
        $data['tags'] = User::orderBy('name','asc')->get()->pluck('name','id');
        $data['gettoday'] = Carbon::today()->format('Y-m-d');//get today
        // dd($data['gettoday']);
        return view('leaves.create',$data);
    }


    public function store(LeaveRequest $request)
    {
        // $this->validate($request,[
        //     'post_id'=>'required',
        //     'startdate' => 'required|date',
        //     'enddate' => 'required|date',
        //     'tag' => 'required',
        //     'title' => 'required|max:50',
        //     'content' => 'required',
        //     'image'=>'nullable|image|mimes:jpg,jpeg,png|max:1024'
        // ]);

        $user = Auth::user();
        $user_id = $user->id;

        $leave = new Leave();
        $leave->post_id = $request['post_id'];
        $leave->startdate = $request['startdate'];
        $leave->enddate = $request['enddate'];
        $leave->tag = $request['tag'];
        $leave->title = $request['title'];
        $leave->content = $request['content'];

        $leave->user_id = $user_id;

        // Single Image Upload
        if(file_exists($request['image'])){
            $file = $request['image'];
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid($user_id).$leave['id'].$fname;
            $file->move(public_path('assets/img/leaves/'),$imagenewname);

            $filepath = 'assets/img/leaves/'. $imagenewname;
            $leave->image = $filepath;
        }

        $leave->save();

        session()->flash('success',"New Leave Created");


        // $users = User::all();
        $tagperson = $leave->tagperson()->get();
        // dd($tagperson);
        $studentid = $leave->student($user_id);

        Notification::send($tagperson,new LeaveNotify($leave->id,$leave->title,$studentid));
        return redirect(route('leaves.index'));
    }


    public function show(string $id)
    {
        $leave = Leave::findOrFail($id);


        // Query Builder only can read/write access to notifications table 
        $type = "App\Notifications\LeaveNotify";
        $getnoti = \DB::table('notifications')->where('notifiable_id',$user_id,$id)->where('type',$type)->where('data->id',$id)->pluck('id');
        // dd($getnoti);
        \DB::table('notifications')->where('id',$getnoti)->update(['read_at'=>now()]);
        return view('leaves.show',["leave"=>$leave]);
    }


    public function edit(string $id)    
    {
        $data['leave'] = Leave::findOrFail($id);
        $data['posts'] = \DB::table('posts')->where('attshow',3)->orderBy('title','asc')->get()->pluck('title','id');
        $data['tags'] = User::orderBy('name','asc')->get()->pluck('name','id');

        return view('leaves.edit',$data);
    }


    public function update(LeaveRequest $request, string $id)
    {
        // $this->validate($request,[
        //     'post_id'=>'required',
        //     'startdate' => 'required|date',
        //     'enddate' => 'required|date',
        //     'tag' => 'required',
        //     'title' => 'required|max:50',
        //     'content' => 'required',
        //     'image'=>'nullable|image|mimes:jpg,jpeg,png|max:1024'
        // ]);



        $leave = Leave::findOrfail($id);
        $leave->post_id = $request['post_id'];
        $leave->startdate = $request['startdate'];
        $leave->enddate = $request['enddate'];
        $leave->tag = $request['tag'];
        $leave->title = $request['title'];
        $leave->content = $request['content'];


        // Remove Old Image
        if($request->hasFile('image')){
            $path = $leave->image;

            if(File::exists($path)){
                File::delete($path);
            }
        }

        // Single Image Update
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid($user_id).$leave['id'].$fname;
            $file->move(public_path('assets/img/leaves/'),$imagenewname);

            $filepath = 'assets/img/leaves/'. $imagenewname;
            $leave->image = $filepath;
        }

        $leave->save();


        session()->flash('success',"Update Successfully");
        return redirect(route('leaves.index'));
    }


    public function destroy(string $id)
    {
        $leave = Leave::findOrFail($id);

        // Remove Old Image
        $path = $leave->image;
        if(File::exists($path)){
            File::delete($path);
        }

        $leave->delete();

        session()->flash('info','Delete Successfully');
        return redirect()->back();
    }

    public function markasread(){
        
        $user = Auth::user();
        $user_id = $user->id;

    
        // $user->unreadNotifications->markAsRead();
        // $user->notifications()->delete();   // all delete (r/un)

        // $user = User::findOrFail($user_id);
        $user = User::findOrFail(auth()->user()->id);

        foreach ($user->unreadNotifications as $notification) {
            $notification->markAsRead();
            // $notification->delete(); //all delete (un)
        }

        return redirect()->back();

    }



}
