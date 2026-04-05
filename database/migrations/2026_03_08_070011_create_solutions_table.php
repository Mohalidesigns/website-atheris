<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('icon')->nullable();
            $table->string('tagline')->nullable();
            $table->text('description')->nullable();
            $table->string('hero_image')->nullable();
            $table->json('challenges')->nullable();
            $table->json('features')->nullable();
            $table->json('how_it_works')->nullable();
            $table->json('regulatory_alignment')->nullable();
            $table->json('integrations')->nullable();
            $table->json('roi_metrics')->nullable();
            $table->text('cta_text')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solutions');
    }
};
