<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'currency',
        'billing_period',
        'description',
        'features',
        'is_featured',
        'button_text',
        'button_url',
        'order',
        'active'
    ];

    protected $casts = [
        'price' => 'float',
        'features' => 'array',
        'is_featured' => 'boolean',
        'active' => 'boolean',
    ];
}
