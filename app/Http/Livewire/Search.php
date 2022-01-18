<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Venue;
use Livewire\Component;

class Search extends Component
{

    public $results = [];
    public $query;

    public function updatedQuery($value)
    {

        $venues =  Venue::search($value)->get()->toArray();
        $events = Event::search($value)->get()->toArray();

        $results = [];
        $results['venue'] = $venues;
        $results['event'] = $events;
        $this->results = $results;
    }

    public function render()
    {
        return view('livewire.search');
    }
}
