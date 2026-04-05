<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Page extends Model
{
    protected $fillable = [
        'title', 'slug', 'template', 'hero_title', 'hero_subtitle',
        'hero_cta_text', 'hero_cta_link', 'sections', 'meta_title',
        'meta_description', 'og_image', 'status', 'published_at', 'author_id', 'sort_order',
    ];

    protected $casts = [
        'sections' => 'array',
        'published_at' => 'datetime',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
}
