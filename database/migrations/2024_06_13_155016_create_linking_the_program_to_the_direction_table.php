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
        Schema::create('linking_the_program_to_the_direction', function (Blueprint $table) {
            $table->integer('Program_ID');
            $table->integer('direction_ID');
            $table->primary(['Program_ID', 'direction_ID']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('linking_the_program_to_the_direction');
    }
};
