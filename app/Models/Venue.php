<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class Venue extends Model
{
    use HasFactory;
    use Searchable;

    // protected $primaryKey = 'slug';

    public function events()
    {
        return $this->hasMany(\App\Models\Event::class);
    }

    public function intro()
    {
        return Str::of($this->intro)->limit(120);
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

    public function rooms()
    {
        return $this->hasMany(\App\Models\Room::class);
    }
}
