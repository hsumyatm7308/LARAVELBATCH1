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

        // = hasManyThrough(related,table,firstkey,secondkey)
        // = hasManyThrough(ဖော်ပြမယ့်တေဘယ်,ဖြတ်သွားမယ့်တေဘယ်,သွားရှာမယ့်အိုင်ဒီကီး,ဖြတ်သွားမယ့်အိုင်ဒီကီး)


    }
}
