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

    public function mapLink()
    {
        $link = 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2285.434890308066!2d-1.9179807253787642!3d53.3345285721363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1644685841620!5m2!1sen!2suk';

//         let coordinateString = '';
        // for (const item of coords) {
//     coordinateString += '!4m3!3m2!1d' + item.lat + '!2d' + item.lon;
        // }
        // const epochNow = Date.now();
        // let urlConstruct = `https://www.google.com/maps/embed?pb=!1m${coords.length * 4 + 16}`;
        // urlConstruct += `!1m12!1m3!1d1.0!2d${coords[0].$.lon}!3d${coords[0].$.lon}`;
        // urlConstruct += `!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1`;
        // urlConstruct += `!4m${coords.length * 4 + 1}!3e0${coordinateString}`;
        // urlConstruct += `!5e0!3m2!1sen!2sau!4v${epochNow}000!5m2!1sen!2sau`;

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
