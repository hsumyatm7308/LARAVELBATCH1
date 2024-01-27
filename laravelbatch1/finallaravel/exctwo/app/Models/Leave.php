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
        return $this->belongsTo(User::class);



    }

    public function tagperson()
    {
        //leave htal ka column name = tag
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

    public function studenturl()
    {
        return Student::where('user_id', $this->user_id)->get(['students.id'])->first();
    }


    public function scopezaclassdate($query)
    {
        return $query->orderBy('updated_at', 'desc');
    }


    public function scopesearchonly($query)
    {

        if ($getsearch = request('search')) {
            $query->orWhereHas('user', function ($query) use ($getsearch) {
                $query->where('name', 'LIKE', '%' . $getsearch . '%');

            })
                ->orWhereHas('post', function ($query) use ($getsearch) {
                    $query->where('title', 'LIKE', '%' . $getsearch . '%');
                });

        }

        return $query;
    }

    public function scopefilteronly($query)
    {
        if ($getfilter = request('filter')) {
            $query->where('post_id', $getfilter);
        }

        return $query;
    }

}
