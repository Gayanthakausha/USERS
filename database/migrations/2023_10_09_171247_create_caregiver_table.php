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
        Schema::create('caregiver', function (Blueprint $table) {
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')->references('User_id')->on('user');
            $table->string('Services_Category');
            $table->double('Services_Charge');
            $table->time('Availability');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caregiver');
    }
};
