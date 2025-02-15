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
        Schema::create('payment', function (Blueprint $table) {
            $table->id('payment_id');
            $table->foreignId('reservation_id');
            $table->string('mode_of_payment');
            $table->timestamps();


            $table->foreign('reservation_id')->references('reservation_id')->on('reservation')->onDelete('cascade')->onUpdate('cascade');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
