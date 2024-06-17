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
        Schema::create('university_sites', function (Blueprint $table) {
            $table->id()->index();
            $table->string('name', 45);
            $table->foreignId('Linking_university_site_ID_university')->index();
            $table->foreignId('Linking_university_site_ID_site')->index();
            $table->foreign('Linking_university_site_ID_university')->references('university_ID')->on('linking_the_university_to_the_site');
            $table->foreign('Linking_university_site_ID_site')->references('site_ID')->on('linking_the_university_to_the_site');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university_sites');
    }
};
