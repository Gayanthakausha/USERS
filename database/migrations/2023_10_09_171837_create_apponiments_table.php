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
        Schema::create('apponiments', function (Blueprint $table) {
            $table->id('Appoinment_id');
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')->references('User_id')->on('careusers');
            $table->date('Appoinment_date');
            $table->string('Service_Category');
            $table->date('Appoinment_Make_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apponiments');
    }
};
