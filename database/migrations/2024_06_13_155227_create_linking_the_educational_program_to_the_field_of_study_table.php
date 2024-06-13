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
        Schema::create('linking_the_educational_program_to_the_field_of_study', function (Blueprint $table) {
            $table->int('id программы');
            $table->int('id направления');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('linking_the_educational_program_to_the_field_of_study');
    }
};
