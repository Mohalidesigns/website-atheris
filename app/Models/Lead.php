<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'company', 'role', 'phone',
        'message', 'source', 'utm_params', 'status', 'form_type',
    ];

    protected $casts = [
        'utm_params' => 'array',
    ];
}
