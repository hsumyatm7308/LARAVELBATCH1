<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = "genders";
    protected $primaryKey = 'id';

    use HasFactory;

    public function articles(){
        // return $this->hasManyThrough(Article::class,User::class);

        // = belongsToMany(related,table,foreignPivotKey,relativePivoteKey)
    }
}
