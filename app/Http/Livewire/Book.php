<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Booking;
use Livewire\Component;
use App\Mail\BookingEmailAdmin;
use App\Mail\BookingEmailCustomer;
use Google\Service\CloudLifeSciences\Mount;
use Illuminate\Support\Facades\Mail;

class Book extends Component
{

    public $room;
    public $date;
    public $time;
    public $duration = 1;

    public $name = '';
    public $email = '';
    public $phone = '';

    // listeners
    protected $listeners = ['dayClicked'];

    public function mount()
    {
        $this->date = Carbon::today()->format('Y-m-d');
        $this->time = Carbon::now()->format('H:00');
    }

    public function dayClicked($year, $month, $day)
    {

        $date = Carbon::create($year, $month, $day);
        $this->date = $date->format('Y-m-d');
    }

    public function book()
    {

        $booking = $this->validate(
            [
                'room' => 'required',
                'date' => 'required',
                'time' => 'required',
                'duration' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
            ]
        );

        $booking['date'] = $this->date . ' ' . $this->time;

        $booking['room_id'] = $this->room->id;
        $booking['venue_id'] = $this->room->venue_id;
        $booking['status'] = 'pending';
  

        $new_booking = Booking::create($booking);

        // Send An Email To Customer & Admin


        $email = $this->room->email ?? $this->room->venue->email;

        Mail::to($email)->send(new BookingEmailAdmin($new_booking));
 


        // Reset the form
        $this->room = '';
        $this->date = '';
        $this->time = '';
        $this->duration = '';

        // Show a message
        session()->flash('message', 'Room booking request received - You will receive an email once confirmed.');
    }


    public function render()
    {
        return view('livewire.book');
    }
}
