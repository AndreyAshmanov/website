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
            $table->id()->index();
            $table->string('name', 45)->index()
            $table->string('Address', 45)->index();
            $table->integer('Rating')->index();
            $table->string('Description', 150);
            $table->integer('Linking_university_to_the_site_ID_university')->index();
            $table->integer('Linking_university_to_the_site_ID_the_site')->index();
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
