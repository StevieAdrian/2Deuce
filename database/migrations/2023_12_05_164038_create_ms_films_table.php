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
        Schema::create('ms_films', function (Blueprint $table) {
            $table->id();
            $table->string('FilmName');
            $table->string('FilmDirector');
            $table->unsignedInteger('MaturityRatingId');
            $table->integer('FilmDuration');
            $table->unsignedInteger('FilmStatusID');
            $table->text('FilmSynopsis');
            $table->string('FilmWriter');
            $table->string('FilmPoster');    
            $table->timestamps();

            $table->foreign('MaturityRatingId')->references('id')->on('ms_maturityrating');
            $table->foreign('FilmStatusID')->references('id')->on('ms_filmstatus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ms_films');
    }
};