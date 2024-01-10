<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'slug',
        'user_id'
    ];


    public function attstatus(){
                                // relative    foreignkey  ownerkey(primary eky)

        return $this->belongsTo(Status::class,'attshow','id');
    }


    public function user(){
        return $this->belongsTo(User::class);
    }


    public function status(){
        return $this->belongsTo(Status::class);
    }
    

    
    public function tag(){
        return $this->belongsTo(Tag::class);
    }

    public function type(){
                                // relative    foreignkey  ownerkey(primary eky)
        return $this->belongsTo(Type::class,'type_id');
    }
}
