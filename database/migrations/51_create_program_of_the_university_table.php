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
        Schema::create('program_of_the_university', function (Blueprint $table) {
            $table->id();
            $table->boolean('The_form_of_education')->default(true);
            $table->boolean('Cost/Budget')->default(true);
            $table->integer('Budget_places');
            $table->integer('Number_of_paid_seats');
            $table->unsignedBigInteger('Budget_place_Id')->index();
            $table->integer('Binding_Prog_eg_id_programm')->index();
            $table->integer('Binding_Prog_eg_id_direction')->index();
            $table->integer('LinkingProg/EX_ID_program')->index();
            $table->integer('LinkingProg/EX_ID_exam')->index();
            $table->foreign('LinkingProg/EX_ID_program')->references('Program_ID')->on('linking_pro_ex');
            $table->foreign('LinkingProg/EX_ID_exam')->references('Exam_ID')->on('linking_pro_ex');
            $table->foreign('Budget_place_Id')->references('id')->on('budget_places');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_of_the_university');
    }
};
