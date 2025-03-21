<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'phone1',
        'phone2',
        'email1',
        'email2',
        'social_twitter',
        'social_facebook',
        'social_instagram',
        'social_linkedin',
        'active'
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
