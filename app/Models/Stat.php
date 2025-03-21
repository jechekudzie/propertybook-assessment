<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'value',
        'icon',
        'prefix',
        'suffix',
        'order',
        'active'
    ];

    protected $casts = [
        'value' => 'integer',
        'active' => 'boolean',
    ];

    /**
     * Get the formatted value with prefix and suffix.
     */
    public function getFormattedValueAttribute()
    {
        return ($this->prefix ?? '') . $this->value . ($this->suffix ?? '');
    }
}
