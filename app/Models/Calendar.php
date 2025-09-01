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


            /*
              `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `venue_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `duration` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `payment_status` varchar(255) NOT NULL DEFAULT 'unpaid',
  `payment_method` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,

  */

            $start = Carbon::parse(date('Y-m-d',$booking->date) . ' ' . $booking->time);
            $end = $start->copy()->addMinutes($booking->duration);

            $data[] = [
                'id' => $booking->id,
                'title' => $booking->name,
                'start' => $start->format('d-m-Y H:i'),
                'end' => $end->format('d-m-Y H:i'),
                'date' => $booking->date->format('d-m-Y H:i'),
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
