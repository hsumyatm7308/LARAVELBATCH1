<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;

    
    protected $table = 'stages';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image',
        'post_id',
        'user_id',
        'stage_id',
        'remark'
    ];

}
