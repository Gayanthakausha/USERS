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
        Schema::create('appinments_done', function (Blueprint $table) {
            $table->unsignedBigInteger('Appoinment_id');
            $table->foreign('Appoinment_id')->references('Appoinment_id')->on('apponiments');
            $table->string('Note');
            $table->string('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appinments_done');
    }
};
