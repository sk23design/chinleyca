<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Slider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $slides = [
            [
            'slide' => '5607mWZfxynNMMYGUd9CkeJKP6b96rqngAdAa49D.jpg',
            'title' => 'Chinley Primary',
            'intro' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis velit voluptas at porro, iure iusto corporis officiis minima repellendus repellat animi omnis eos quis consequatur laudantium illo ducimus pariatur quod',
            ],
            [
            'slide' => 'LjMFvd9xIxhJEX93dXJqrt6sPCKDng84BHHCwE6M.jpg',
            'title' => 'Outside Space',
            'intro' => 'Lorem ipsum. Perspiciatis velit voluptas at porro, iure iusto corporis officiis minima repellendus repellat animi omnis eos quis consequatur laudantium illo ducimus pariatur quod',
            ],
            [
            'slide' => 'staff.jpg',
            'title' => 'New Building',
            'intro' => 'Perspiciatis velit voluptas at porro, iure iusto corporis officiis minima repellendus repellat animi omnis eos quis consequatur laudantium illo ducimus pariatur quod',
            ],
    ];

        return view('components.slider', ['slides' => $slides]);
    }
}
