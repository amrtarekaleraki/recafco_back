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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->text('mission');
            $table->text('trusted');
            $table->text('quality');
            $table->text('hse');
            $table->string('annual');
            $table->string('increase');
            $table->string('employes');
            $table->string('projects');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
