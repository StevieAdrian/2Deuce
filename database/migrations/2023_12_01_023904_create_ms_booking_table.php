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
        Schema::create('ms_booking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserId');
            $table->unsignedBigInteger('ScheduleId');
            $table->unsignedBigInteger('BookingStatusId');
            $table->timestamps();

            $table->foreign('UserId')->references('id')->on('ms_users');
            $table->foreign('ScheduleId')->references('id')->on('ms_schedules');
            $table->foreign('BookingStatusId')->references('id')->on('ms_booking_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ms_booking');
    }
};
