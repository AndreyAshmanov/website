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
        Schema::create('educational_programm_of_the_university', function (Blueprint $table) {
            $table->id();
            $table->boolean('The_form_of_education');
            $table->boolean('Cost/Budget');
            $table->integer('Budget_places');
            $table->integer('Number_of_paid_seats');
            $table->integer('Budget_place_Id');
            $table->integer('Linking_the_Program/EG_ID_of_the_program');
            $table->integer('Binding_of_the_Prog/EG_id_of_the_direction');
            $table->integer('Linking the pro/EX_ID of the program');
            $table->integer('Linking the pro/EX_ID of the exam');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educational_programm_of_the_university');
    }
};
