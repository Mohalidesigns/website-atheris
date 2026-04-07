<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('tagline')->nullable();
            $table->text('description')->nullable();
            $table->string('category')->nullable(); // e.g., "Facility Management", "Agriculture Tech", "HR Technology"
            $table->string('hero_image')->nullable();
            $table->string('screenshot_1')->nullable();
            $table->string('screenshot_2')->nullable();
            $table->string('screenshot_3')->nullable();
            $table->string('screenshot_1_caption')->nullable();
            $table->string('screenshot_2_caption')->nullable();
            $table->string('screenshot_3_caption')->nullable();
            $table->json('features')->nullable();
            $table->json('stats')->nullable();
            $table->json('how_it_works')->nullable();
            $table->json('challenges')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
