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
        Schema::create('college', function (Blueprint $table) {
            $table->id()->primary()->unique();
            $table->string('name', 45)->unique();
            $table->string('Address', 45)->unique();
            $table->integer('Rating')->unique();
            $table->string('Description', 150);
            $table->integer('Linking_the_university_to_the_site_of_the_university')->unique();
            $table->integer('Linking_the_university_to_the_site_ID_of_the_site')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college');
    }
};
