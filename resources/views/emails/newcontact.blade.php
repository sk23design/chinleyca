@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
New Contact Request - {{ config('app.name') }}
@endcomponent
@endslot

{{-- Body --}}
@component('mail::panel')
Name: {{$contact->name}}

Email: {{$contact->email}}

Phone: {{$contact->phone}}

Fundraising event: {{$contact->fundraising}}

Donation of voucher, prize or reward: {{$contact->donation}}

Comments: {{$contact->comments}}

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