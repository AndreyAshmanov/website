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
        Schema::create('school_sites', function (Blueprint $table) {
            $table->id()->index();
            $table->string('name', 45);
            $table->foreignId('Linking_school_ID_site')->index();
            $table->foreignId('Linking_school_site_ID_site')->index();
            $table->foreign('Linking_school_ID_site')->references('school_ID')->on('linking_the_school_to_the_site');
            $table->foreign('Linking_school_site_ID_site')->references('site_ID')->on('linking_the_school_to_the_site');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_sites');
    }
};
