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
            $table->increments('Id программы');
            $table->increments('id направления');
            $table->int('id программы');
            $table->int('id экзамена');
            $table->int('Образовательная программа вуза_Id');
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