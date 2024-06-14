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
        Schema::create('college_sites', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->integer('Linking_the_university_to_the_site_of_the_university');
            $table->integer('Linking_the university_to_the_site_ID_of_the_site');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_sites');
    }
};
