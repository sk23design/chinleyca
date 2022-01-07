<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'start' => 'datetime',
        'end' => 'datetime',
        'categories' => 'array',
        'days' => 'array',
        'every' => 'array',
    ];

    public function venue()
    {
        return $this->belongsTo(\App\Models\Venue::class, 'venue_id', 'id');
    }
}
