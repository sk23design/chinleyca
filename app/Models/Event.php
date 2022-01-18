<?php

namespace App\Models;

use Carbon\Carbon;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    use Searchable;

    protected $casts = [
        'start' => 'datetime',
        'end' => 'datetime',
        'categories' => 'array',
        'days' => 'array',
        'every' => 'array',
    ];

    public function venue()
    {
        return $this->belongsTo(\App\Models\Venue::class, 'venue_id', 'id');
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize the data array...

        return $array;
    }

    public function getRecurringDescription()
    {

        $dowMap = ['Sundays', 'Mondays', 'Tuedays', 'Wednesdays', 'Thursdays', 'Fridays', 'Saturdays'];
        $daysText = [];
        foreach ($this->days as $day) {
            $daysText[] = $dowMap[$day];
        }
        $days = implode(',', $daysText);

        $start = Carbon::create($this->start);

        $end = Carbon::create($this->end);
        $time = $start->hour . ' until ' . $end->hour;

        return $days . ' at  ' . $time;
    }
}
