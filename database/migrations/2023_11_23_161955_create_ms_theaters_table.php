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
        Schema::create('ms_theaters', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('NumberOfStudios');
            $table->string('Address');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('ms_theaters');
    }
};
