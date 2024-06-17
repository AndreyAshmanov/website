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
            $table->foreignId('University_sites_id');
            $table->foreignId('Budget_place_Id')->index();
            $table->foreignId('LinkingProg/EG_ID_program')->index();
            $table->foreignId('LinkingProg/EG_ID_direction')->index();
            $table->foreignId('LinkingProg/EX_ID_program')->index();
            $table->foreignId('LinkingProg/EX_ID_exam')->index();
            $table->foreign('LinkingProg/EG_ID_program')->references('Program_ID')->on('linking_the_program_to_the_direction');
            $table->foreign('LinkingProg/EG_ID_direction')->references('direction_ID')->on('linking_the_program_to_the_direction');
            $table->foreign('LinkingProg/EX_ID_program')->references('Program_ID')->on('linking_pro_ex');
            $table->foreign('LinkingProg/EX_ID_exam')->references('Exam_ID')->on('linking_pro_ex');
            $table->foreign('Budget_place_Id')->references('id')->on('budget_places');
            $table->foreign('University_sites_id')->references('id')->on('university_sites');
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
