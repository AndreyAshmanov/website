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
            $table->boolean('The_form_of_education')->default(true);
            $table->boolean('Paid/Free')->default(true);
            $table->integer('Cost');
            $table->integer('Number_of_seats');
            $table->integer('School_sites_id')->index();
            $table->integer('Training_FORM_ID')->index();
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
