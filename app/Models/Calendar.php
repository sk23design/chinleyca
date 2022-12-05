<?php

namespace App\Models;

use ICal\ICal;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Calendar extends Model
{
    use HasFactory;

    public $casts = [
        'data' => 'array',
    ];

    public function getEvents()
    {
        return collect($this->data);

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

    public static function syncAll()
    {

        $calendars = Calendar::all();
        foreach ($calendars as $calendar) {

            $calendar->sync();
        }
    }

    public function sync()
    {

        $ical = new ICal();
        $ical->initUrl($this->url);

        $dateFrom = Carbon::today();
        $dateTo = Carbon::parse('+1 Year');

        $events = $ical->eventsFromRange($dateFrom, $dateTo);

        $data = [];

        $raw_data = json_encode($events);

        foreach ($events as $event) {
            $dtstart = Carbon::parse($event->dtstart);
            $dtend = Carbon::parse($event->dtend);
            $data[] = [
                'id' => $event->uid,
                'title' => $event->summary,
                'start' => $dtstart->format('d-m-Y H:i'),
                'end' => $dtend->format('d-m-Y H:i'),
                'date' => $dtstart->format('d-m-Y H:i'),
                'description' => $event->description,
                'location' => $event->location,
                'status' => $event->status,
                'rrule' => @$event->rrule,
                'uid' => @$event->uid,
                'sequence' => @$event->sequence,
                'created' => @$event->created,
            ];
        }
        $this->raw_data = $raw_data;
        $this->data = $data;
        $this->save();

        return $data;
    }
}
