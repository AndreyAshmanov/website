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
        Schema::create('linking_the_educational_program_field_study', function (Blueprint $table) {
            $table->integer('Program_ID')->primary();
            $table->integer('direction_ID')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('linking_the_educational_program_field_study');
    }
};
