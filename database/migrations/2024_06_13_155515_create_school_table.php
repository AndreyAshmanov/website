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
        Schema::create('school', function (Blueprint $table) {
            $table->id();
            $table->string('Название', 45);
            $table->string('Адрес', 45);
            $table->integer('Рейтинг');
            $table->string('Описание', 150);
            $table->integer('Привязка школы к площадке_Id школы');
            $table->integer('Привязка школы к площадке_Id площадки');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school');
    }
};
