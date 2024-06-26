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
        Schema::create('educational_programm_of_the_school', function (Blueprint $table) {
            $table->id()->index();
            $table->foreignId('The_form_of_education');
            $table->boolean('Paid/Free')->default(true);
            $table->integer('Cost');
            $table->integer('Number_of_seats');
            $table->foreignId('School_sites_id')->index();
            $table->integer('Training_FORM_ID')->index();

            $table->foreign('School_sites_id')->references('id')->on('school_sites');

            $table->foreign('The_form_of_education')->references('id')->on('the_form_of_education');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educational_programm_of_the_school');
    }
};
