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
        Schema::create('colleges_educational_programm', function (Blueprint $table) {
            $table->id()->index();
            $table->boolean('The_form_of_education');
            $table->boolean('Cost/Budget');
            $table->integer('Budget_places');
            $table->integer('Number_of_paid_seats');
            $table->integer('The_average_score_for_admission');
            $table->integer('College_sites_id');
            $table->integer('Budget_place_Id1')->index();
            $table->integer('Training_FORM_ID')->index();
            $table->integer('College_SITES_ID1')->index();
            $table->integer('LinkingProg/egID_program')->index();
            $table->integer('BindingProg/egID_direction')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colleges_educational_programm');
    }
};
