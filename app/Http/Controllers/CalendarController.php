<?php

namespace App\Http\Controllers;

class CalendarController extends Controller
{
    /**
     * Gets the events data from the database
     * and populates the iCal object.
     *
     * @return void
     */
    public function index()
    {
        $events = \App\Models\Event::all();
        define('ICAL_FORMAT', 'Ymd\THis\Z');

        $icalObject = "BEGIN:VCALENDAR
        VERSION:2.0
        METHOD:PUBLISH
        PRODID:-//{{config('app.name')}}// Events//EN\n";

        // loop over events
        foreach ($events as $event) {
            $icalObject .=
            'BEGIN:VEVENT
            DTSTART:'.date(ICAL_FORMAT, strtotime($event->start)).'
            DTEND:'.date(ICAL_FORMAT, strtotime($event->end)).'
            DTSTAMP:'.date(ICAL_FORMAT, strtotime($event->start))."
            SUMMARY:$event->summary
            UID:$event->uid
            STATUS:".strtoupper($event->status).'
            LAST-MODIFIED:'.date(ICAL_FORMAT, strtotime($event->updated_at))."
            LOCATION:$event->location
            END:VEVENT\n";
        }

        // close calendar
        $icalObject .= 'END:VCALENDAR';

        // Set the headers
        header('Content-type: text/calendar; charset=utf-8');
        header('Content-Disposition: attachment; filename="cal.ics"');

        $icalObject = str_replace(' ', '', $icalObject);

        echo $icalObject;
    }
}
