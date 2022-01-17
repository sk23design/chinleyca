<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Link extends Component
{
    public $link = '#';
    public $label = 'Label';
    public $target = '_blank';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $label, $target = '_blank')
    {
        $this->link = $link;
        $this->label = $label;
        $this->target = $target;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.link');
    }
}
