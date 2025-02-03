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

Date: {{$booking->date}}
Time: {{$booking->time}}
Duration: {{$booking->duration}} hours

Room: {{$booking->room->name}}

Comments: {{$booking->info}}

Approve Or Reject this booking by clicking the link below: <a href="{{config('app.url').'/ca_admin/resources/bookings/'.$booking->id.'/edit'}}">Approve/Reject</a>

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