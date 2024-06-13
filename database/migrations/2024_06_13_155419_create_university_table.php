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
        Schema::create('university', function (Blueprint $table) {
            $table->id();
            $table->string('Название', 45);
            $table->string('Адрес');
            $table->int('Рейтинг');
            $table->string('Описание', 150);
            $table->int('Привязка вуза к площадке_Id вуза');
            $table->int('Привязка вуза к площадке_Id площадки');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university');
    }
};
