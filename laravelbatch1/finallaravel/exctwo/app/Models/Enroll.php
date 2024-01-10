<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Enroll extends Model
{
    use HasFactory;

    protected $table = "enrolls";
    protected $primaryKey = "id";
    protected $fillable = [
        'image',
        'post_id',
        'user_id',
        'stage_id',
        'remark'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Enroll.php (Enroll model)
    public function stage()
    {
        return $this->belongsTo(Stage::class);

    }




    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function student()
    {

        // Method 1 
        // $students = Student::where('user_id', $userid)->get();
        // foreach ($students as $student) {
        //     // dd($student);
        //     return $student["regnumber"];

        // }



        // Method 2 
        // $students = Student::where('user_id', $userid)->get()->pluck('regnumber');
        // foreach ($students as $student) {
        //     // dd($student);
        //     return $student;

        // }

        // Method 3
        // $students = Student::where('user_id', $this->user_id)->get()->pluck('regnumber');
        // foreach ($students as $student) {
        //     // dd($student);
        //     return $student;

        // }

        // Method 5               
        //    join(sec table, sec table's primary key,compare,primary table foreign key) 
        // $students = Student::join('users', 'users.id', "=", "students.user_id")->where('user_id', $this->user_id)->get();
        // foreach ($students as $student) {
        //     // dd($student);
        //     return $student["regnumber"];

        // }

        // Method 6           
        //    join(sec table, sec table's primary key,compare,primary table foreign key) 
        // $students = Student::join('users', 'users.id', "=", "students.user_id")->where('user_id', $this->user_id)->get()->pluck("regnumber");
        // foreach ($students as $student) {
        //     // dd($student);
        //     return $student;

        // }

        // Method 7       
        //    join(sec table, sec table's primary key,compare,primary table foreign key) 
        // $students = Student::join('users', 'users.id', "=", "students.user_id")->where('user_id', $this->user_id)->get(['users.*', 'students.*']);
        // foreach ($students as $student) {
        //     // dd($student);
        //     return $student;

        // }

        // Method 8       
        //    join(sec table, sec table's primary key,compare,primary table foreign key) 
        // $students = Student::join('users', 'users.id', "=", "students.user_id")->where('user_id', $this->user_id)->get(['users.name', 'students.regnumber'])->first();

        // // dd($student);
        // return $students["regnumber"];

        // Method 9     
        //    join(sec table, sec table's primary key,compare,primary table foreign key) 
        // $students = Student::join('users', 'users.id', "=", "students.user_id")->where('user_id', $this->user_id)->get(['users.name', 'students.regnumber'])->first()->pluck('regnumber');

        // dd($student);
        // return $students;


        //Method 10 

        // $students = DB::table('students')
        //     ->join('users', 'user_id', '=', 'students.user_id')
        //     ->where('user_id', $this->user_id)
        //     ->get(['users.name', 'students.regnumber'])
        //     ->pluck('regnumber')->first();

        // return $students;


        //Method 11 
        $students = DB::table('students')
            ->select('users.id', 'users.name', 'students.regnumber')
            ->join('users', 'user_id', '=', 'students.user_id')
            ->where('user_id', $this->user_id)
            ->get()
            ->pluck('regnumber')->first();

        return $students;








    }

    public function studenturl()
    {
        return Student::where('user_id', $this->user_id)->get(['students.id'])->first();
    }


}
