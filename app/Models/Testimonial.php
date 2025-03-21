<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'content',
        'image',
        'rating',
        'order',
        'active'
    ];

    protected $casts = [
        'rating' => 'integer',
        'active' => 'boolean',
    ];
}
