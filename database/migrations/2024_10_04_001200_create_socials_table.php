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
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('insta');
            $table->string('linkedin');
            $table->string('youtube');
            $table->string('email');
            $table->string('career_open');
            $table->string('comercial_no');
            $table->string('website');
            $table->json('factory_location');
            $table->string('factory_phone');
            $table->string('factory_fax');
            $table->json('office_location');
            $table->string('office_phone');
            $table->string('office_fax');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socials');
    }
};
