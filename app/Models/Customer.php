<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'company_name', 'slug', 'industry', 'logo', 'challenge', 'solution',
        'results', 'featured_quote', 'quote_author', 'quote_author_title',
        'is_featured', 'meta_title', 'meta_description', 'status',
    ];

    protected $casts = [
        'results' => 'array',
        'is_featured' => 'boolean',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}
