@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
New booking Request - {{ config('app.name') }}
@endcomponent
@endslot

{{-- Body --}}
@component('mail::panel')
Name: {{$booking->name}}

Email: {{$booking->email}}

Phone: {{$booking->phone}}

Date: {{$booking->date->format('d-m-Y')}}
Time: {{$booking->time}}
Duration: {{$booking->duration}} hours

Room: {{$booking->room->name}}

Comments: {{$booking->info}}

@if($booking->status == 'pending')


Your Booking Is {{$booking->status}}.

Thank you for your booking request. We will get back to you soon. 

@endif

@if($booking->status == 'confirmed')

Thank You ! Your Booking Is {{$booking->status}}.

@elseif($booking->status == 'cancelled')

Your Booking Is {{$booking->status}}.

@endif

@endcomponent
{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
@endcomponent
@endslot
@endcomponent