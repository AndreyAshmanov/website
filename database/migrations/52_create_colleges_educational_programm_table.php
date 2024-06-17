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
            $table->integer('College_sites_id');
            $table->integer('Budget_place_Id_1')->index();
            $table->integer('Training_FORM_ID')->index();
            $table->integer('College_SITES_ID_1')->index();
            $table->unsignedBigInteger('LinkingProg/EG_ID_program')->index();
            $table->unsignedBigInteger('LinkingProg/EG_ID_direction')->index();

            $table->primary(['id', 'LinkingProg/EG_ID_program', 'LinkingProg/EG_ID_direction']);

            $table->foreign('LinkingProg/EG_ID_program')->references('Program_ID')->on('linking_the_program_to_the_direction');
            $table->foreign('LinkingProg/EG_ID_direction')->references('direction_ID')->on('linking_the_program_to_the_direction');
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
