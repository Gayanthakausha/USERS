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
        Schema::create('guardians', function (Blueprint $table) {
            $table->unsignedBigInteger('g_id');
            $table->foreign('g_id')->references('User_id')->on('careusers');
            $table->string('Full_name',255);
            $table->string('NIC');
            $table->string('Address');
            $table->string('Gender');
            $table->string('Relationship');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardians');
    }
};
