<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = [
        'title', 'slug', 'icon', 'tagline', 'description', 'hero_image',
        'challenges', 'features', 'how_it_works', 'regulatory_alignment',
        'integrations', 'roi_metrics', 'page_content', 'screenshots',
        'cta_text', 'meta_title', 'meta_description', 'status', 'sort_order',
    ];

    protected $casts = [
        'challenges' => 'array',
        'features' => 'array',
        'how_it_works' => 'array',
        'regulatory_alignment' => 'array',
        'integrations' => 'array',
        'roi_metrics' => 'array',
        'page_content' => 'array',
        'screenshots' => 'array',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published')->orderBy('sort_order');
    }
}
