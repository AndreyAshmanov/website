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
            $table->integer('Бюджетные места');
            $table->integer('Количество платных мест');
            $table->integer('Блюджетные места_Id');
            $table->integer('Привязка Прог/напр_Id программы');
            $table->integer('Привязка Прог/напр_id направления');
            $table->integer('Привязка про/ экз_Id программы');
            $table->integer('Привязка про/ экз_Id экзамена');
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
