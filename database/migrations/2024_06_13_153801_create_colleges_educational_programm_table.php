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
            $table->integer('Бюджетные места');
            $table->integer('Количество платных мест');
            $table->integer('Средний балл для поступления');
            $table->integer('Площадки колледжей_Id');
            $table->integer('Блюджетные места_Id1');
            $table->integer('Форма обучения_Id');
            $table->integer('Площадки колледжей_Id1');
            $table->integer('Привязка Прог/напр_Id программы');
            $table->integer('Привязка Прог/напр_id направления');
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
