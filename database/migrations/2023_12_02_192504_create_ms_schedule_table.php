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
            $table->unsignedInteger('StudioId');
            $table->timestamps();

            $table->foreing('FilmId')->references('id')->on('ms_films');
            $table->foreign('StudioId')->references('id')->on('ms_studio');
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
