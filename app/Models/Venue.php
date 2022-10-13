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

    public function getIntro()
    {
        return Str::of($this->intro)->limit(120);
    }

    public function mapLink()
    {
        $link = 'https://www.google.com/maps/embed/v1/place?key=AIzaSyDhnuVrZHNma_FmfUeq3Z7pQ4hAbEW_fuI&q='.$this->postcode.'&center='.$this->lat.','.$this->long;

        //https://www.google.com/maps/place/Chinley+Community+Centre/@53.3388113,-1.9427515,18.8z/data=!4m5!3m4!1s0x487a3483bdc3b89b:0x5acd47ee7f41a9b0!8m2!3d53.3388719!4d-1.9429073

        return $link;
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
