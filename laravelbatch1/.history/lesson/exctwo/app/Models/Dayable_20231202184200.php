<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dayable extends Model
{
    use HasFactory;
        
    protected $table = 'dayable';
    protected $fillable = [
        'name',
        'slug',
        'status_id',
        'user_id',
    ];


}
