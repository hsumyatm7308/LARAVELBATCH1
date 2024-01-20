<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;


    protected $table = 'leaves';
    protected $primary = 'id';
    protected $fillable = [
        'post_id',
        'startdate',
        'enddate',
        'remark',
        'tag',
        'title',
        'content',
        'image',
        'stage_id',
        'authorize_id',
        'user_id'
    ];






    public function user()
    {
        return $this->belongsTo(User::class, 'tag', 'id');



    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }

    public function student($userid)
    {
        $students = Student::where('user_id', $userid)->get()->pluck('regnumber');
        foreach ($students as $student) {
            // dd($student);
            return $student;

        }
    }
}
