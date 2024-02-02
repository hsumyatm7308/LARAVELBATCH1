<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\AnnouncementNotify;

class Announcement extends Model
{
    use HasFactory;


    protected $table = 'announcements';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image',
        'title',
        'content',
        'post_id',
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



}


