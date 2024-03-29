<?php

namespace App\Http\Controllers;

use App\Jobs\MailBoxJob;
use App\Jobs\StudentMailBoxJob;
use App\Mail\StudentMailbox;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailbox;

use App\Models\Student;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'regnumber' => 'required|unique:students,regnumber',
            'firstname' => 'required',
            'lastname' => 'required',
            'remark' => 'max:1000'
        ]);

        $user = Auth::user();
        $user_id = $user->id;
        $student = new Student();
        $student->regnumber = $request['regnumber'];
        $student->firstname = $request['firstname'];
        $student->lastname = $request['lastname'];
        $student->slug = Str::slug($request['firstname']);
        $student->remark = $request['remark'];
        $student->user_id = $user_id;

        $student->save();
        return redirect(route('students.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        $status = $student->status();
        $enrolls = $student->enrolls();
        return view('students.show', ['student' => $student, "enrolls" => $enrolls, 'status' => $status]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'regnumber' => 'required|unique:students,regnumber,' . $id,
            'firstname' => 'required',
            'lastname' => 'required',
            'remark' => 'max:1000'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $student = Student::findOrFail($id);
        $student->regnumber = $request['regnumber'];
        $student->firstname = $request['firstname'];
        $student->lastname = $request['lastname'];
        $student->slug = Str::slug($request['firstname']);
        $student->remark = $request['remark'];
        $student->user_id = $user_id;

        $student->save();
        return redirect(route('students.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->back();
    }

    public function mailbox(Request $request)
    {

        // =>Method 1  (to Mailbox)
        // $to = $request['cmpemail'];
        // $subject = $request['cmpsubject'];
        // $content = $request['cmpcontent'];

        // Mail::to($to)->send(new Mailbox($subject, $content));
        // Mail::to($to)->send(new Mailbox($subject, $content));

        //    can't see output  but we can check in cc in real world
        // Mail::to($to)->cc("admin@dlt.com")->bcc("info@dlt.com")->send(new Mailbox($subject, $content));


        // => Using Job Method 1 ( to MailBox )
        // dispatch(new MailBoxJob($to, $subject, $content));



        // => Method 2  ( to SutdentMailBox)

        // $data["to"] = $request['cmpemail'];
        // $data["subject"] = $request['cmpsubject'];
        // $data["content"] = $request['cmpcontent'];


        $data = [
            "to" => $request['cmpemail'],
            "subject" => $request['cmpsubject'],
            "content" => $request['cmpcontent']
        ];

        // Mail::to($data['to'])->send(new StudentMailbox($data));

        dispatch(new StudentMailBoxJob($data));

        return redirect()->back();
    }
}
