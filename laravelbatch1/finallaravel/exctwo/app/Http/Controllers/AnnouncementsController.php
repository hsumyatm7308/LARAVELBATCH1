<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\Models\Announcement;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AnnouncementNotify;

use Illuminate\Support\Str;


use App\Models\User;

class AnnouncementsController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();
        return view('announcements.index', compact('announcements'));
    }


    public function create()
    {
        $posts = \DB::table('posts')->where('attshow', 3)->orderBy('title', 'asc')->get()->pluck('title', 'id');
        return view('announcements.create', compact('posts'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpg,jpeg,png|max:10024',
            'title' => 'required|max:300|',
            'content' => 'required',

        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $announcement = new Announcement();

        $announcement->title = $request['title'];
        $announcement->post_id = $request['post_id'];
        $announcement->content = $request['content'];
        $announcement->user_id = $user_id;

        //Single Image Upload 
        if (file_exists($request['image'])) {
            $file = $request['image'];
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid($user_id) . $announcement['id'] . $fname;
            $file->move(public_path('assets/img/announcements/'), $imagenewname);

            $filepath = "assets/img/announcements/" . $imagenewname;
            $announcement->image = $filepath;
        }

        $announcement->save();

        $users = User::where('id', '!=', auth()->user()->id)->get();

        Notification::send($users, new AnnouncementNotify($announcement->id, $announcement->title, $announcement->image));

        session()->flash('success', 'New Announcement');
        return redirect(route('announcements.index'));
    }


    public function show(string $id)
    {

        $user = Auth::user();
        $user_id = $user->id;

        $announcement = Announcement::findOrFail($id);
        $comments = $announcement->comments()->orderBy('updated_at', 'desc')->get();

        // $type = 'App\Notifications\AnnouncementNotify';

        // $getnoti = \DB::table('notifications')->where('notifiable_id', $user_id, $id)->where('type', $type)->where('data->id', $id)->pluck('id');
        // \DB::table('notifications')->where('id', $getnoti)->update(['read_at' => now()]);

        $type = 'App\Notifications\AnnouncementNotify';

        $getnoti = \DB::table('notifications')
            ->where('notifiable_id', $user_id)
            ->where('id', $id) // Assuming $id is the notification id
            ->where('type', $type)
            ->where('data->id', $id)
            ->pluck('id')
            ->first(); // Retrieve the first id

        \DB::table('notifications')
            ->where('id', $getnoti)
            ->update(['read_at' => now()]);


        return view('announcements.show', ['announcement' => $announcement, 'comments' => $comments, 'getnoti']);
    }

    public function edit(string $id)
    {
        $announcement = Announcement::findOrFail($id);
        $posts = \DB::table('posts')->where('attshow', 3)->get()->pluck('title', 'id');


        return view('announcements.edit', compact('announcement', 'posts'));
    }


    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpg,jpeg,png|max:10024',
            'title' => 'required|max:300|',
            'content' => 'required',

        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $announcement = Announcement::findOrFail($id);

        $announcement->title = $request['title'];
        $announcement->content = $request['content'];

        $announcement->post_id = $request['post_id'];

        $announcement->user_id = $user_id;

        // Remove old Image 
        if ($request->hasFile('image')) {
            $path = $announcement->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }


        //Single Image Update 
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid($user_id) . $announcement['id'] . $fname;
            $file->move(public_path('assets/img/announcements/'), $imagenewname);

            $filepath = "assets/img/announcements/" . $imagenewname;
            $announcement->image = $filepath;
        }

        $announcement->save();


        return redirect(route('announcements.index'));
    }



    public function destroy(string $id)
    {
        $announcement = Announcement::findOrFail($id);
        //Remove Old Imge 
        $path = $announcement->image;
        if (File::exists($path)) {
            File::delete($path);
        }

        $announcement->delete();
        return redirect()->back();
    }
}
