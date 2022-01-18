<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

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
        if ($this->days) {
            foreach ($this->days as $day) {
                $daysText[] = @$dowMap[$day];
            }
        }
        $days = implode(',', $daysText);

        $start = Carbon::create($this->start);

        $end = Carbon::create($this->end);
        $time = $start->hour.' until '.$end->hour;

        return $days.' at  '.$time;
    }
}
