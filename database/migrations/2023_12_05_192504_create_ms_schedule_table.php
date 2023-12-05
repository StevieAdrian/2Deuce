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
        Schema::create('ms_schedule', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedInteger('FilmId');
            $table->timestamps();

            $table->foreing('FilmId')->references('id')->on('ms_films');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ms_schedule');
    }
};
