<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function comment()
    {
        //name
        return $this->morpMany(Comment::class, 'commentable');
    }

    public function likes()
    {
        return $this->belongsToMany(Post::class, 'post_like')->withTimestamps();
    }

    public function checkpostlike($postid)
    {
        return $this->likes()->where('post_id', $postid)->exists();
    }

    public function followings()
    {                                                  //        foreignkey ,relative key (primary key )
        return $this->belongsToMany(User::class, 'follower_user', 'follower_id', 'user_id')->withTimestamps();

        // Npte:: fowllower_id is me 
        //    user_id  is a person that I followed 
    }


    public function checkuserfollowing($wasfollowedid)
    {
        return $this->followings()->where('user_id', $wasfollowedid)->exists();

        // Note:: user_id mean = Other Person 
        // Note:: wasfollowedif mean = person I followed 

    }

}
