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
        Schema::create('exam', function (Blueprint $table) {
            $table->id();
            $table->string('Предмет', 45);
            $table->integer('Проходной балл');
            $table->integer('Минимальный балл');
            $table->boolean('Можно ли сдавать внутренний экзамен')->default(true);
            $table->integer('Привязка программы к экзамену_Id программы');
            $table->integer('Привязка программы к экзамену_Id экзамена');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam');
    }
};
