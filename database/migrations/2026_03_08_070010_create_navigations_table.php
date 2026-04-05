<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('navigations', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->string('url')->nullable();
            $table->string('type')->default('link');
            $table->foreignId('parent_id')->nullable()->constrained('navigations')->cascadeOnDelete();
            $table->integer('sort_order')->default(0);
            $table->string('location')->default('header');
            $table->boolean('is_active')->default(true);
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('navigations');
    }
};
