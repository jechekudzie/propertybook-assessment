<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'list_items',
        'tab_name',
        'order',
        'active'
    ];

    protected $casts = [
        'list_items' => 'array',
        'active' => 'boolean',
    ];
}
