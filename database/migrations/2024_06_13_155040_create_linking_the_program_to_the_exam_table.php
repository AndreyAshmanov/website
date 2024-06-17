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
        Schema::create('linking_the_program_to_the_exam', function (Blueprint $table) {
            $table->integer('Program_ID')->index();
            $table->integer('Exam_ID')->index();
            $table->integer('The_Universitys_educational_program_id');
            $table->primary(['Program_ID', 'Exam_ID']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('linking_the_program_to_the_exam');
    }
};
