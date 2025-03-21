<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'icon',
        'icon_color',
        'background_color',
        'link_text',
        'link_url',
        'order',
        'active'
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
