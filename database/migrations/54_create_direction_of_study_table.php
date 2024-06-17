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
        Schema::create('direction_of_study', function (Blueprint $table) {
            $table->id()->index();
            $table->string('name', 45);
            $table->integer('Duration of study (years)');
            $table->unsignedBigInteger('LinkingProg/EG_ID_program')->index();
            $table->unsignedBigInteger('BindingProg/EG_ID_direction')->index();
            $table->primary(['id', 'LinkingProg/EG_ID_program', 'BindingProg/EG_ID_direction']);
            $table->foreign('LinkingProg/EG_ID_program')->references('Program_ID')->on('linking_the_program_to_the_direction');
            $table->foreign('LinkingProg/EG_ID_direction')->references('direction_ID')->on('linking_the_program_to_the_direction');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direction_of_study');
    }
};
