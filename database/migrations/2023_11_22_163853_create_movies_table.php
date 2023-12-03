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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('FilmName');
            $table->string('FilmDirector');
            $table->integer('MaturityRatingId');
            $table->integer('FilmDuration');
            $table->integer('FilmStatusID');
            $table->text('FilmSynopsis');
            $table->string('FilmWriter');
            $table->string('FilmPoster');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
