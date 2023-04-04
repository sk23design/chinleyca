<?php

namespace App\Http\Livewire;

use App\Mail\ContactNew;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $contact = [];
    public $name;
    public $email;
    public $phone;
    public $contact_id;

    public $fundraising = '';

    public $donation = '';

    public $show_fundraising = false;
    public $show_donation = false;

    public $comments;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'phone' => 'required',
    ];

    public function render()
    {
        return view('livewire.contact');
    }

    public function createContact()
    {
        $this->validate();

        $new_contact = \App\Models\Contact::create(
            [
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'comments' => $this->comments,
                'fundraising' => $this->fundraising,
                'donation' => $this->donation,
                'ip' => $_SERVER['REMOTE_ADDR'],
            ]
        );

        $this->contact_id = $new_contact->id;
        //$this->resetForm();

        Mail::to('fundraiser@chinleyca.org.uk')->send(new ContactNew($new_contact));

        Mail::to('debug@sk23.co.uk')->send(new ContactNew($new_contact));
    }
}
