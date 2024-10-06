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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('cascade');
            $table->json('title');
            $table->text('image');
            $table->json('location');
            $table->json('client');
            $table->foreignId('product_id')->nullable()->constrained('products')->onDelete('cascade');
            $table->string('value');
            $table->json('subtitle');
            $table->json('description');
            $table->text('image2');
            $table->text('slider_image');
            $table->enum('featured', ['active', 'inactive'])->default('inactive');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
