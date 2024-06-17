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
        Schema::create('program_of_the_colleges', function (Blueprint $table) {
            $table->id()->index();
            $table->boolean('The_form_of_education')->default(true);
            $table->boolean('Cost/Budget')->default(true);
            $table->integer('Budget_places');
            $table->integer('Number_of_paid_seats');
            $table->integer('The_average_score_for_admission');
            $table->unsignedBigInteger('College_sites_id');
            $table->unsignedBigInteger('Budget_place_Id_1')->index();
            $table->integer('Training_FORM_ID')->index();
            $table->integer('College_SITES_ID_1')->index();
            $table->unsignedBigInteger('LinkingProg/EG_ID_program')->index();
            $table->unsignedBigInteger('LinkingProg/EG_ID_direction')->index();

            $table->foreign('LinkingProg/EG_ID_program')->references('Program_ID')->on('linking_the_program_to_the_direction');
            $table->foreign('LinkingProg/EG_ID_direction')->references('direction_ID')->on('linking_the_program_to_the_direction');

            $table->foreign('Budget_place_Id_1')->references('id')->on('budget_places');

            $table->foreign('College_sites_id')->references('id')->on('college_sites');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_of_the_colleges');
    }
};
