<?php

namespace App\Models;

use Carbon\Carbon;
use ICal\ICal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    public $casts = [
        'data' => 'array',
    ];

    public function getEvents()
    {
        return collect($this->data);
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
        $confirmedBookings = Booking::where('status', 'confirmed')->get();
        foreach ($confirmedBookings as $booking) {
            $data[] = [
                'id' => $booking->id,
                'title' => $booking->name,
                'start' => $booking->start_time->format('d-m-Y H:i'),
                'end' => $booking->end_time->format('d-m-Y H:i'),
                'date' => $booking->start_time->format('d-m-Y H:i'),
                'description' => $booking->description,
                'location' => $booking->room->name,
                'status' => $booking->status,
                'uid' => $booking->uid,
                'sequence' => $booking->sequence,
                'created' => $booking->created_at->format('d-m-Y H:i'),
            ];
        }
        


        $this->raw_data = $raw_data;
        $this->data = $data;
        $this->save();

        return $data;
    }
}
