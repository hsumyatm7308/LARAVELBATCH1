<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dayable extends Model
{
    use HasFactory;
        
    protected $table = 'dayables';
    protected $fillable = [
        'name',
        'slug',
        'status_id',
        'user_id',
    ];

    Schema::create('dayables', function (Blueprint $table) {
        $table->integer('day_id')->unsigned();
        $table->integer('dayable_id');
        $table->string('dayable_type');
}
