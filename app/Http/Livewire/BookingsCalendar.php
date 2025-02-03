<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use Livewire\Component;
use Illuminate\Support\Collection;
use Asantibanez\LivewireCalendar\LivewireCalendar;

class BookingsCalendar extends LivewireCalendar
{

    public $room;

    public function events() : Collection
    {

        $bookings = Booking::where('room_id', $this->room->id)->where('status','<>','cancelled')->get();  

        $events = [];


        foreach ($bookings as $booking) {


            $name =  $booking->name .' '.$booking->room->name;

            if($booking->status == 'pending'){
                $name = $name . ' (Pending)';
            }

            $events[] = [
                'id' => $booking->id,
                'title' => $name,
                'start' => $booking->time,
                'date' => $booking->date,
            ];
        }

        return collect($events);

    }


    public function onDayClick($year, $month, $day)
{
    // This event is triggered when a day is clicked
    // You will be given the $year, $month and $day for that day



    $this->emit('dayClicked', $year, $month, $day);
}

public function onEventClick($eventId)
{
    // This event is triggered when an event card is clicked
    // You will be given the event id that was clicked
}

public function onEventDropped($eventId, $year, $month, $day)
{
    // This event will fire when an event is dragged and dropped into another calendar day
    // You will get the event id, year, month and day where it was dragged to
}
}
