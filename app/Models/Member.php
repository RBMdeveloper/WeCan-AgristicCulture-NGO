<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'photo',
        'name',
        'designation',
        'position',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    // Active members
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    // Ordered members
    public function scopeOrdered($query)
    {
        return $query->orderBy('position', 'asc');
    }
}