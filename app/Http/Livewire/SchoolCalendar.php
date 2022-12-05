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

        $calendar = \App\Models\Calendar::find(1)->first();

        return $calendar->getEvents();

        return collect([
            [
                'id' => 1,
                'title' => 'Breakfast',
                'description' => 'Pancakes! 🥞',
                'date' => Carbon::today(),
            ],
            [
                'id' => 2,
                'title' => 'Meeting with Pamela',
                'description' => 'Work stuff',
                'date' => Carbon::tomorrow(),
            ],
        ]);
    }

    public function onEventClick($eventId)
    {
        dd($eventId);
    }
}
