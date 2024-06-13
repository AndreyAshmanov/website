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
        Schema::create('colleges_educational_programm', function (Blueprint $table) {
            $table->id();
            $table->boolean('Форма обучения');
            $table->boolean('Стоимость/бюджет');
            $table->int('Бюджетные места');
            $table->int('Количество платных мест');
            $table->int('Средний балл для поступления');
            $table->int('Площадки колледжей_Id');
            $table->int('Блюджетные места_Id1');
            $table->int('Форма обучения_Id');
            $table->int('Площадки колледжей_Id1');
            $table->int('Привязка Прог/напр_Id программы');
            $table->int('Привязка Прог/напр_id направления');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colleges_educational_programm');
    }
};
