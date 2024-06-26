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
            $table->id()->index();
            $table->string('Subject', 45);
            $table->integer('Passing_score');
            $table->integer('Minimum_score');
            $table->boolean('Is_it_possible_to_take_an_internal_exam')->default(true);
            $table->foreignId('LinkingProg/EX_ID_program');
            $table->foreignId('LinkingProg/EX_ID_exam');
            $table->foreign('LinkingProg/EX_ID_program')->references('Program_ID')->on('linking_pro_ex');
            $table->foreign('LinkingProg/EX_ID_exam')->references('Exam_ID')->on('linking_pro_ex');
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
