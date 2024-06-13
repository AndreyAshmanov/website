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
            $table->boolean('Форма обучения');
            $table->boolean('Стоимость/бюджет');
            $table->int('Бюджетные места');
            $table->int('Количество платных мест');
            $table->int('Блюджетные места_Id');
            $table->int('Привязка Прог/напр_Id программы');
            $table->int('Привязка Прог/напр_id направления');
            $table->int('Привязка про/ экз_Id программы');
            $table->int('Привязка про/ экз_Id экзамена ');
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
