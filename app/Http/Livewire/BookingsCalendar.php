<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use App\Models\Event;
use Livewire\Component;
use Illuminate\Support\Collection;
use Asantibanez\LivewireCalendar\LivewireCalendar;

class BookingsCalendar extends LivewireCalendar
{

    public $room;

    public function events() : Collection
    {

        $room_bookings = Booking::where('room_id', $this->room->id)->where('status','<>','cancelled')->get();  

        $bookings = [];


        foreach ($room_bookings as $booking) {


            $name =  $booking->name .' '.$booking->room->name;

            if($booking->status == 'pending'){
                $name = $name . ' (Pending)';
            }

            $bookings[] = [
                'id' => $booking->id,
                'title' => $name,
                'start' => $booking->time,
                'date' => $booking->date,
            ];
        }

        // Get events for this room

        $events = Event::where('room_id', $this->room->id)->get();

        foreach ($events as $event) {
            if($event->recurring)
            {
                // Get today get days and every from event 
    
                $today = \Carbon\Carbon::today();
                $days = $event->days;
                $every = $event->every[0];
                
                if ($every == 1) { // Weekly
                    for ($i = 0; $i < 52; $i++) { // Loop for a year
                        foreach ($days as $day) {
                            $date = $today->copy()->startOfWeek()->addDays($day - 1)->addWeeks($i);
                            $bookings[] = [
                                'id' => $event->id,
                                'title' => $event->title ,
                                'start' => $event->time_start,
                                'date' => $date->format('Y-m-d'),
                            ];
                        }
                    }
                } elseif ($every == 2) { // Monthly
                    for ($i = 0; $i < 12; $i++) { // Loop for a year
                        foreach ($days as $day) {
                            $date = $today->copy()->startOfMonth()->addDays($day - 1)->addMonths($i);
                            $bookings[] = [
                                'id' => $event->id,
                                'title' => $event->title,
                                'start' => $event->time_start,
                                'date' => $date->format('Y-m-d'),
                            ];
                        }
                    }
                }
            } else {
                // ... existing code ...
            }
        }

        // order by time

        return collect($bookings)->sortBy('start');

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
