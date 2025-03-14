<?php

namespace App\Http\Livewire;

use Asantibanez\LivewireCalendar\LivewireCalendar;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class SchoolCalendar extends LivewireCalendar
{
    public function events(): Collection
    {
        // return \App\Models\Event::whereDate('start', '>=', date('Y-m-d'))->get();

        $calendar = \App\Models\Calendar::first();
        if($calendar){
            return $calendar->getEvents();
        }
   

        return collect([
           
        ]);
    }

    public function onEventClick($eventId)
    {
        dd($eventId);
    }
}
