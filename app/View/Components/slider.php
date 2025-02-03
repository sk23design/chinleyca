<?php

namespace App\View\Components;

use App\Models\Slideshow;
use Illuminate\View\Component;

class slider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $is_home_page = false;
    public $slides = [];

    public function __construct($is_home_page = false)
    {
        $this->is_home_page = $is_home_page;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $slideshow = Slideshow::firstWhere('show_on_homepage', 1);

        if ($slideshow && count($slideshow->slides)) {
            $this->slides = $slideshow->slides;
        }

        return view('components.slider', ['slides' => $this->slides]);
    }
}
