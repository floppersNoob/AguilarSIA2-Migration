<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id('reservation_id');
            $table->foreignId('guest_id');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->timestamps();

            $table->foreign('guest_id')->references('guest_id')->on('guest')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
