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
            $table->id();
            $table->string('name', 45);
            $table->integer('Duration of study (years)');
            $table->integer('Linking_the_Program/EG_ID_of_the_program');
            $table->integer('Binding_of_the_Prog/EG_id_of_the_direction');
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
