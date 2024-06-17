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
        Schema::create('linking_pro_ex', function (Blueprint $table) {
            $table->integer('Program_ID')->primary();
            $table->integer('Exam_ID')->index();
            $table->foreign('Program_ID')->references('LinkingProg/EX_ID_program')->on('program_of_the_university');
            $table->foreign('Exam_ID')->references('LinkingProg/EX_ID_exam')->on('program_of_the_university');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('linking_pro_ex');
    }
};
