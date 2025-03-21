<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answer',
        'order',
        'is_open_by_default',
        'active'
    ];

    protected $casts = [
        'is_open_by_default' => 'boolean',
        'active' => 'boolean',
    ];
}
