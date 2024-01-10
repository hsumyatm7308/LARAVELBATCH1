<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    
    protected $table = 'days';
    protected $primary = 'id';
    protected $fillable = [
        'name',
        'slug',
        'remark',
        'status_id',
        'user_id'
    ];


    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function student(){
        return $this -> belongsTo(Student::class);
    }
}
