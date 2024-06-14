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
            $table->id();
            $table->string('name', 45);
            $table->integer('Linking_university_school_ID_site');
            $table->integer('Linking_university_site_ID_site');
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
