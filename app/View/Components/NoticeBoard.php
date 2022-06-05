<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NoticeBoard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $notices = [];

    public function __construct()
    {
        $this->notices = \App\Models\Notice::where('active', 1)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.notice-board');
    }
}
