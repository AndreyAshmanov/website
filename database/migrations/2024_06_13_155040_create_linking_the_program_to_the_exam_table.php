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
        Schema::create('linking_the_program_to_the_exam', function (Blueprint $table) {
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
        Schema::dropIfExists('linking_the_program_to_the_exam');
    }
};
