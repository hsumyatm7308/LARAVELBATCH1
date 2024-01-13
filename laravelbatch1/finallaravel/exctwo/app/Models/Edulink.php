<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edulink extends Model
{
    use HasFactory;
    protected $table = 'edulinks';

    protected $primary = 'id';
    protected $fillable = [
        'classdate',
        'post_id',
        'url',
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function post()
    {
        return $this->belongsTo(Post::class);
    }



    // Define Local Scope 
    // public function scope[name] ($query){
    //     return $query->[method];
    // }

    public function scopezaclassdate($query)
    {
        return $query->orderBy('updated_at', 'desc');
    }


    // public function scopefilter($query)
    // {
    //     if ($getfilter = request('filter')) {
    //         $query->where('post_id', $getfilter);
    //     }

    //     if ($getsearch = request('search')) {
    //         $query->where('classdate', 'LIKE', '%' . $getsearch . '%')
    //             ->orWhere('created_at', 'LIKE', '%' . $getsearch . '%')
    //             ->orWhere('updated_at', 'LIKE', '%' . $getsearch . '%')
    //             //orWhereHas(relationship table, callback)
    //             ->orWhereHas('post', function ($query) use ($getsearch) {
    //                 $query->where('title', 'LIKE', '%' . $getsearch . '%');
    //             });

    //     }

    //     return $query;
    // }



    public function scopesearchonly($query)
    {

        if ($getsearch = request('search')) {
            $query->where('classdate', 'LIKE', '%' . $getsearch . '%')
                ->orWhere('created_at', 'LIKE', '%' . $getsearch . '%')
                ->orWhere('updated_at', 'LIKE', '%' . $getsearch . '%')
                //orWhereHas(relationship table, callback)
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
