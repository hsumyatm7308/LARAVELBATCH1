<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table -> id();
            $table -> string('regnumber');
            $table -> string('city');
            $table -> string('slug');
            $table -> text('remark')->nullable();
            $table -> unsignedBigInteger('status_id')->default('4');
            $table -> unsignedBigInteger('user_id');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
