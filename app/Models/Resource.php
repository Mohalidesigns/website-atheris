<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = [
        'title', 'slug', 'type', 'description', 'file_path', 'thumbnail',
        'is_gated', 'form_fields', 'download_count', 'meta_title',
        'meta_description', 'status', 'published_at',
    ];

    protected $casts = [
        'form_fields' => 'array',
        'is_gated' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
}
