<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "articles";

    protected $primaryKey = 'id';

    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';

    // Mass Assignment 
    // Method 1 

    // protected $fillable = [
    //     'title',
    //     'description',
    //     'user_id',
    //     'rating'
    // ];

    //Method 2 
    protected $guarded = [];

    public function userfromuserphp()
    {
        // return $this->belongsTo("APP\Models\Users");
        return $this->belongsTo(User::class);

    }


    public function photos()
    {
        //morphMany(relatedtable,name);
        return $this->morphMany(Photo::class, 'imageable');
    }

    

}