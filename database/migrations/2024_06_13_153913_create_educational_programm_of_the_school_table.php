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
            $table->int('Стоимость');
            $table->int('Количество мест');
            $table->int('Площадки школ_Id');
            $table->int('Форма обучения_Id');
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
