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
            $table->integer('LinkingProg/EG_ID_program')->index();
            $table->integer('BindingProg/EG_ID_direction')->index();
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
