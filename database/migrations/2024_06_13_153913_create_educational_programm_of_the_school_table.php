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
            $table->id();
            $table->boolean('Форма обучения');
            $table->boolean('Платная/бесплатная');
            $table->integer('Стоимость');
            $table->integer('Количество мест');
            $table->integer('Площадки школ_Id');
            $table->integer('Форма обучения_Id');
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
