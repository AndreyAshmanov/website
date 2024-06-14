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
        Schema::create('exam', function (Blueprint $table) {
            $table->id();
            $table->string('Subject', 45);
            $table->integer('Passing_score');
            $table->integer('Minimum_score');
            $table->boolean('Is_it_possible_to_take_an_internal_exam')->default(true);
            $table->integer('Linking_the_program_to_the_exam_id_of_the_program');
            $table->integer('Linking_the_program_to_the_exam_id_of_the_exam');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam');
    }
};
