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
            $table->boolean('The_form_of_education')->default(true);
            $table->boolean('Cost/Budget')->default(true);
            $table->integer('Budget_places');
            $table->integer('Number_of_paid_seats');
            $table->integer('The_average_score_for_admission');
            $table->integer('College_sites_id');
            $table->integer('Budget_place_Id1')->index();
            $table->integer('Training_FORM_ID')->index();
            $table->unsignedBigInteger('College_SITES_ID1')->index();
            $table->integer('Binding_Prog_eg_id_programm')->index();
            $table->integer('Binding_Prog_eg_id_direction')->index();
            $table->foreign('Budget_place_Id1')->references('id')->on('budget_places');
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
