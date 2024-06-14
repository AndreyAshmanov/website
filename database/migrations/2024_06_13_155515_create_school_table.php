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
            $table->string('name', 45);
            $table->string('Address', 45);
            $table->integer('Rating');
            $table->string('Description', 150);
            $table->integer('Linking_a_school_to_a_school_id_site');
            $table->integer('Linking_the_school_to_the_site_ID_of_the_site');
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
