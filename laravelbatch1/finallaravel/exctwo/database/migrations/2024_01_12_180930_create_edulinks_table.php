<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('edulinks', function (Blueprint $table) {
            $table->id();
            $table->date('classdate');
            $table->unsignedBigInteger('post_id');
            $table->string('url');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edulinks');
    }
};




// for  relative

// $table->string('name')->unique();
// $table->string('slug');
// $table->string('status_id');
// $table->string('user_id');


// for contacts 
// sting('firstname')
// string('lastname')->nullable();
// string('birthday')->nullable();
// unsignedBiginteger('relative_id');
// unsignedBiginteger('user_id')->constrained(
//     table: 'users',
//     indexName: 'contacts_users_id'
// )->onUpdate('cascade')->onDelete('cascade');