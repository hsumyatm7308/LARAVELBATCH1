<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances';
    protected $primaryKey = 'id';
    protected $fillable = [
        'classdate',
        'post_id',
        'attcode',
        'user_d'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function student($userid)
    {

        // Method 1 
        // $students = Student::where('user_id', $userid)->get();
        // foreach ($students as $student) {
        //     // dd($student);
        //     return $student["regnumber"];

        // }



        // Method 2 
        $students = Student::where('user_id', $userid)->get()->pluck('regnumber');
        foreach ($students as $student) {
            // dd($student);
            return $student;

        }
    }



}
