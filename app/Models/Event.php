<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    protected $fillable = ['title', 'description', 'start_time', 'end_time', 'type', 'capacity', 'is_active'];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'is_active' => 'boolean',
    ];

    public function attendees(): BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->withPivot('registered_at');
    }

    // Scope para facilitar consultas de eventos visibles
    public function scopeAvailable($query)
    {
        return $query->where('is_active', true)
            ->where('start_time', '>', now());
    }
}
