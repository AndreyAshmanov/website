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
        Schema::create('the_form_of_education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('In_person');
            $table->unsignedBigInteger('In_absentia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('the_form_of_education');
    }
};
