<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'image',
        'sub_heading',
        'heading',
        'description',
        'button_text',
        'button_link',
        'position',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    // Active banners only
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    // Ordered banners
    public function scopeOrdered($query)
    {
        return $query->orderBy('position', 'asc');
    }
}