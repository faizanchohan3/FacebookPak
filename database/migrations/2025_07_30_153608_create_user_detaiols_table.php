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
        Schema::create('user_detaiols', function (Blueprint $table) {
            $table->id();
    $table->string('name');
    $table->unsignedBigInteger('user_id');
    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


    $table->string('username')->unique();
    $table->string('email')->unique();
    $table->string('password');
    $table->string('profile_picture')->nullable();
    $table->string('cover_photo')->nullable();
    $table->text('bio')->nullable();
    $table->string('location')->nullable();
    $table->string('website')->nullable();
    $table->enum('gender', ['male', 'female', 'other'])->nullable();
    $table->date('birthdate')->nullable();


                      $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_detaiols');
    }
};
