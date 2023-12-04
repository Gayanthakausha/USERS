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
        Schema::create('patients', function (Blueprint $table) {
            $table->unsignedBigInteger('p_id');
            $table->foreign('p_id')->references('User_id')->on('careusers');
            $table->string('Full_name',255);
            $table->string('NIC');
            $table->string('Address');
            $table->string('Gender');
            $table->string('Current_location');
            $table->date('Dob');
            $table->string('Photo');
            $table->string('Status');
            $table->string('Age_Category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
