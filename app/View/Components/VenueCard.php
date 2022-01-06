<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VenueCard extends Component
{
    public $venue;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($venue)
    {
        $this->venue = $venue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.venue-card');
    }
}
