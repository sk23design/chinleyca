<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $casts = [
        'start' => 'date',
        'end' => 'date',
    ];

    public function venue()
    {
        return $this->belongsTo(\App\Models\Venue::class, 'venue_id', 'id');
    }
}
