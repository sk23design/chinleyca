<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventsList extends Component
{
    public $events = [];
    public $categories = [];

    public $current_category = null;
    public $current_category_name = '';

    public function mount()
    {
        $this->events = \App\Models\Event::all();
        $this->categories = \App\Models\Category::all();
    }

    public function render()
    {
        return view('livewire.events-list');
    }

    public function updatedCurrentCategory($id)
    {
        $this->setCurrentCategory($id);
    }

    public function setCurrentCategory($id)
    {
        $this->current_category = $id;
        $this->current_category_name = \App\Models\Category::find($id)->first()->name;
        $this->events = \App\Models\Event::where('categories', 'like', '%'.$this->current_category.'%')->get();
        //    dd(\App\Models\Event::where('categories', $this->current_category)->toSql(), $this->current_category);
    }

    public function resetCurrentCategory()
    {
        $this->current_category = null;
        $this->events = \App\Models\Event::all();
    }
}
