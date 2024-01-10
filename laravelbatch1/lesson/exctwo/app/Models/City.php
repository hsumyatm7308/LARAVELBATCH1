<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = "cities";
    protected $primaryKey = "id";
    protected $fillable = [
        "regnumber",
        "city",
        "slug",
        "remark",
        "status_id",
        "user_id"
    ];

    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function student(){
        return $this -> belongsTo(Student::class);
    }

}
