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
        Schema::create('ms_seats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedInteger('theater_id');

            $table->string('SeatName')->nullable();
            $table->string('SubTotal');
            $table->foreign('theater_id')->references('id')->on('ms_theaters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ms_seats');
    }
};
