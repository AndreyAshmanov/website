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
        Schema::create('_prog_binding_eg', function (Blueprint $table) {
            $table->id('id программы');
            $table->increments('id направления');
            $table->integer('id программы');
            $table->integer('id экзамена');
            $table->integer('Образовательная программа вуза_Id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_prog_binding_eg');
    }
};
