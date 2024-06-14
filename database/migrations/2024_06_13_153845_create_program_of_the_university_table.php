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
            $table->id()->index();
            $table->boolean('The_form_of_education');
            $table->boolean('Cost/Budget');
            $table->integer('Budget_places');
            $table->integer('Number_of_paid_seats');
            $table->integer('Budget_place_Id')->index();
            $table->integer('Binding_Prog_eg_id_programm')->index();
            $table->integer('Binding_Prog_eg_id_direction')->index();
            $table->integer('LinkingProg/EX_ID_program')->index();
            $table->integer('LinkingProg/EX_ID_exam')->index();
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
