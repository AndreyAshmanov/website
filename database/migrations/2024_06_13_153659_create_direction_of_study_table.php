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
            $table->string('Название', 45);
            $table->integer('Срок обучения (лет)');
            $table->integer('Привязка Прог/напр_Id программы');
            $table->integer('Привязка Прог/напр_id направления');
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
