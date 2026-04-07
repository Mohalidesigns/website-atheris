<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'slug', 'tagline', 'description', 'category',
        'hero_image', 'screenshot_1', 'screenshot_2', 'screenshot_3',
        'screenshot_1_caption', 'screenshot_2_caption', 'screenshot_3_caption',
        'features', 'stats', 'how_it_works', 'challenges',
        'meta_title', 'meta_description', 'status', 'sort_order',
    ];

    protected $casts = [
        'features' => 'array',
        'stats' => 'array',
        'how_it_works' => 'array',
        'challenges' => 'array',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published')->orderBy('sort_order');
    }
}
