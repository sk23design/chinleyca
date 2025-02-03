<?php

namespace App\Models;

use App\Mail\BookingEmailAdmin;
use App\Mail\BookingEmailCustomer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $casts = [
        'date' => 'datetime',
    ];

    protected $fillable = [
        'name',
        'email',
        'phone',
        'venue_id',
        'room_id',
        'date',
        'time',
        'duration',
        'status',
        'payment_status',
        'payment_method',
        'notes',
    ];


    // When updating check status and send email


    protected static function boot()
    {
        parent::boot();
        static::updated(function ($booking) {
            if ($booking->isDirty('status')) {
                if ($booking->status == 'confirmed') {
                       Mail::to($booking->room->venue->email)->send(new BookingEmailCustomer($booking));
                }

                if ($booking->status == 'cancelled') {
                    Mail::to($booking->room->venue->email)->send(new BookingEmailCustomer($booking));
                    // Delete Booking

             
             }
            }
        });

    
    }

    // Mail::to($this->email)->send(new BookingEmailCustomer($new_booking));

    public function room()
    {
        return $this->belongsTo(Room::class);
    }


    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }


}
