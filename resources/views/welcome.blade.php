@extends('layouts.transparent')
@section('head_scripts')
<title>Home - {{ config('app.name') }}</title>
<meta name="description" content="Chinley Community.">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection

@section('content')

{{-- Intro --}}
<section class="relative">


    <div class="gradient-to-b bg-blue-200">
        <div class="w-48 mx-auto p-8"> @include('assets.logo')</div>
        <div class="text-green-600">@include('assets.low-hills')</div>
    </div>
    <div class="text-green-600 z-10">
        @include('assets.wave')
    </div>
    <div class="md:absolute top-32 w-full mx-auto p-8  rounded-md text-gray-800">
        <h1 class="max-w-2xl  mx-auto text-4xl effect-4 text-center">
            Chinley, Buxworth & Brownside Community Association
        </h1>




    </div>
</section>

<div class="bg-pink-600 text-white z-10">
    @include('assets.wave')
</div>
<section class="py-12 bg-pink-600">
    <div class="max-w-4xl px-8 mx-auto text-white ">
        <h2 class=" text-4xl effect-4 text-center">
            What's On
        </h2>
        <p class="mt-4 text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias eligendi incidunt
            quaerat,
            veniam recusandae cupiditate. Nihil eligendi voluptatum voluptatibus mollitia.</p>
    </div>

    <div class="max-w-6xl mx-auto px-8m mt-8">
        <div class="grid  md:grid-cols-3">

            @for ($i = 0; $i < 3; $i++) <div class="p-8 text-center bg-pink-{{$i + 5 . '00'}} text-white">
                <div class="w-24 mx-auto">
                    @include('assets.arches')
                </div>
                <h3 class="mt-8">
                    Im Visiting
                </h3>
                <p class="mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus labore rem vel ut beatae
                    explicabo dolore, tempora laudantium, ipsa quas earum, eveniet iusto. Cum beatae quo perspiciatis
                    omnis! Aut, laborum.
                </p>
                <button class="inline-flex align-middle items-center mt-4 font-bold">
                    <span>Read more</span>
                    <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
        </div>

        @endfor

    </div>
    </div>
</section>
<div class="bg-brand-lime text-gray-100 z-10">
    @include('assets.wave')
</div>


<section class="py-20 bg-brand-lime text-white">
    <div class="max-w-4xl px-8 mx-auto">
        <div class="w-24 mx-auto text-white">
            @include('assets.arches')
        </div>
        <h2 class=" text-4xl mt-4 text-center">
            Our Venues
        </h2>
        <p class="mt-4 text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias eligendi incidunt
            quaerat,
            veniam recusandae cupiditate. Nihil eligendi voluptatum voluptatibus mollitia.</p>
    </div>

    <div class="max-w-6xl mx-auto px-8 mt-8">
        <div class="grid  md:grid-cols-2 gap-16">
            @foreach ($venues as $venue)


            <x-venue-card :venue="$venue"></x-venue-card>


            @endforeach
        </div>
    </div>

</section>
<div class="text-brand-lime">
    @include('assets.wave')
</div>

<div>
    <div class="bg-white py-12">
        <div class="w-24 mx-auto text-pink-600 ">
            @include('assets.arches')
        </div>
        <h3 class="text-3xl text-pink-600 text-center mt-4">What's On</h3>
        <div class="gallery p-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto px-8 mt-2">
                <img class="object-cover  rounded-xl  shadow-xl " src="{{ asset('storage/images/school') }}/school1.jpg"
                    alt="Schools">
                <img class="object-cover  rounded-xl  shadow-xl" src="{{ asset('storage/images/school') }}/school2.jpg"
                    alt="Schools">
                <img class="object-cover  rounded-xl  shadow-xl" src="{{ asset('storage/images/school') }}/school3.jpg"
                    alt="Schools">

            </div>
        </div>
    </div>
</div>


{{-- Quick Links --}}

<div class="py-12">

    <div class="max-w-6xl mx-auto p-8">
        <h3 class="text-3xl text-pink-600 text-center">Important Links</h3>
        <div class="grid grid-cols-2 lg:grid-cols-3 mt-4 gap-4 justify-between">
            <div class="p-4 text-center"><a target="_blank" href="https://parentview.ofsted.gov.uk/">
                    <img class="mx-auto" src="{{ asset('storage/images/layout') }}/ofsted-parent-view.png"
                        alt="Ofsted Parent View - Chinley Community Association"></a>
            </div>
            <div class="p-4 text-center">
                <a target="_blank" href="https://www.compare-school-performance.service.gov.uk/school/112527">
                    <img class="mx-auto" src="{{ asset('storage/images/layout') }}/department-of-education.jpg"
                        alt="Department Of Education - Chinley Community Association"></a>
            </div>
            <div class="p-4 text-center"><a
                    href="http://www.ofsted.gov.uk/inspection-reports/find-inspection-report/provider/ELS/112527">
                    <img class="mx-auto" src="{{ asset('storage/images/layout') }}/ofsted-logo.png"
                        alt="Ofsted - Chinley Community Association"></a>
            </div>


        </div>
    </div>

</div>

@if ($events ?? '')
<div class="bg-gray-100 py-12">
    <h3 class="text-3xl text-pink-600 text-center">Events</h3>
    @include('includes.events-list')
</div>
@endif

<div class="py-12">
    <div class="max-w-6xl mx-auto p-8 text-center">
        <h3 class="text-3xl text-lime-600 text-center"> The Chinley, Buxworth & Brownside Community Association.</h3>
        <p class="mt-4">
            The Chinley, Buxworth & Brownside Community Association is an organisation set up to deliver a range of
            community and leisure improvements in the Parish. It came about through the Parish Plan consultation in 2005
            and has been set up to make the Parish a better place to live, work and spend your spare time.
        </p>

    </div>
</div>
@endsection