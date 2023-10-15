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
        Schema::create('payments', function (Blueprint $table) {
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')->references('User_id')->on('user');
            $table->unsignedBigInteger('Appoinment_id');
            $table->foreign('Appoinment_id')->references('Appoinment_id')->on('apponiments');
            $table->double('Payment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
