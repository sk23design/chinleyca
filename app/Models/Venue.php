<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Venue extends Model
{
    use HasFactory;

    // protected $primaryKey = 'slug';

    public function events()
    {
        return $this->hasMany(\App\Models\Event::class);
    }

    public function intro()
    {
        return Str::of($this->intro)->limit(120);
    }
}
