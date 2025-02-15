<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('guest', function (Blueprint $table) {
            $table->id('guest_id');
            $table->foreignId('user_id');
            $table->string('email')->unique();
            $table->integer('contact_number');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }
     /**
     * Reverse the migrations.
     */
    
    public function down(): void
    {
        Schema::dropIfExists('guest');
    }
};
