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
        Schema::create('ms_studio', function (Blueprint $table) {
            $table->id();
            $table->string('StudioName');
            $table->unsignedBigInteger('TheaterId'); 
            $table->timestamps();

            $table->foreign('TheaterId')->references('id')->on('ms_theaters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ms_studio');
    }
};
