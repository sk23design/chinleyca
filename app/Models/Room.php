<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function venue()
    {
        return $this->belongsTo(\App\Models\Venue::class);
    }

    public function bookings()
    {
        return $this->hasMany(\App\Models\Booking::class);
    }   
}
