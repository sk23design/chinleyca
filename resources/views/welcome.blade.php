@extends('layouts.app')
@section('head_scripts')
<title>Home - {{ config('app.name') }}</title>
<meta name="description" content="Chinley Community.">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection

@section('content')

<main>
    <header class="relative bg-gray-100 lg:bg-gray-50">
        <div class="relative pt-10 sm:pb-10 md:py-18 lg:py-24 px-4 sm:px-8 mx-auto lg:max-w-7xl">
            <div class="mx-auto max-w-md sm:max-w-3xl lg:max-w-none lg:w-1/2 lg:mx-0">
                <div class="w-32 mx-auto md:mx-0"> @include('assets.logo')</div>
                <h1
                    class="my-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center lg:text-left">
                    Chinley, Buxworth & Brownside
                    <span class="block text-pink-600">Community Association </span>
                </h1>
                <p class="mb-10 mx-auto text-gray-600 text-lg sm:text-xl md:max-w-xl lg:max-w-none">
                    The Chinley, Buxworth & Brownside Community Association is an organisation set up to deliver a range
                    of community and leisure improvements in the Parish. It came about through the Parish Plan
                    consultation in 2005 and has been set up to make the Parish a better place to live, work and spend
                    your spare time.
                </p>

                <div class="flex justify-center sm:justify-start">
                    <span class="rounded-md shadow">
                        <a href="#book"
                            class="flex items-center justify-center border border-transparent text-base leading-6 font-medium rounded-md text-white bg-pink-600 hover:bg-pink-800 focus:outline-none  focus:shadow-outline-teal transition duration-150 ease-in-out px-8 py-3 md:py-2 md:px-8 md:text-lg">Book
                            button</a>
                    </span>
                </div>
            </div>
        </div>

        <div
            class="relative -mt-15 sm:mt-0 w-full sm:h-72 md:h-96 lg:h-full lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <picture>
                <img src="{{asset('storage/images/slider/slider1.jpg')}}"
                    class="sm:absolute sm:inset-0 sm:w-full sm:h-full sm:object-cover" alt="Venue" aria-hidden="true">
            </picture>
        </div>


        <svg class="block lg:hidden absolute top-0 left-0 w-full text-gray-50" viewBox="0 0 411 201">
            <path
                d="M0 0C80.0392 0 322.5 0 322.5 0C322.5 0 330.534 0 411 0C411 0 411 5.1327 411 25.5C411 39 343.5 38 276.5 105.5C209.5 173 146 105.5 86.5 140.5C27 175.5 0 201 0 201V0Z"
                fill="currentColor"></path>
        </svg>


        <svg class="hidden lg:block absolute right-1/2 inset-y-0 h-full w-48 text-gray-50 transform translate-x-1/2"
            fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M50 0h50L50 100H0z"></path>
        </svg>
    </header>


    </section>

    <section class="py-12 bg-gray-100">
        <div class="max-w-7xl px-8 mx-auto text-gray-800 ">
            <h2
                class="my-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center ">
                Discover
                <span class="block text-pink-600">Chinley, Buxworth & Brownside</span>
            </h2>
            <p class="mt-4 text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias eligendi
                incidunt
                quaerat,
                veniam recusandae cupiditate. Nihil eligendi voluptatum voluptatibus mollitia.</p>
        </div>

        <div class="max-w-7xl mx-auto px-8 mt-8">
            <div class="grid  md:grid-cols-3 gap-8">

                @for ($i = 0; $i < 3; $i++) <div
                    class="text-center bg-pink-{{$i + 5 . '00'}} text-white overflow-hidden rounded-xl shadow-lg">
                    <a href="#" class="">
                        <div class="w-full mx-auto">
                            <img src="{{asset('storage/images/slider/slider1.jpg')}}"
                                class="h-72 object-cover overflow-hidden" alt="Venue" aria-hidden="true">
                        </div>
                        <div class="p-8">
                            <h3>
                                Im Visiting
                            </h3>
                            <p class="mt-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus labore rem vel ut
                                beatae
                                explicabo dolore, tempora laudantium, ipsa quas earum, eveniet iusto. Cum beatae quo
                                perspiciatis
                                omnis! Aut, laborum.
                            </p>
                            <button
                                class="inline-flex align-middle items-center mt-4 font-bold bg-white text-pink-600 px-4 py-2 rounded-full">
                                <span>Read more</span>
                                <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </a>
            </div>

            @endfor

        </div>
        </div>
    </section>
    <div class="bg-white text-gray-100 z-10">
        @include('assets.wave')
    </div>


    <section class="py-12x bg-white text-gray-800">
        <div class="max-w-4xl px-8 mx-auto">

            <h2
                class="my-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center">
                Our
                <span class="block text-pink-600">Venues</span>
            </h2>
            <p class="mt-4 text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias eligendi
                incidunt
                quaerat,
                veniam recusandae cupiditate. Nihil eligendi voluptatum voluptatibus mollitia.</p>
        </div>

        <div class="max-w-7xl mt-8 px-8 mx-auto">
            <div class="grid  md:grid-cols-3 gap-8">
                @foreach ($venues as $venue)


                <x-venue-card :venue="$venue"></x-venue-card>


                @endforeach
            </div>
        </div>

    </section>
    <div class="text-white bg-gray-100">
        @include('assets.wave')
    </div>

    <div>
        <div class="bg-gray-100 py-12">

            <h2
                class="my-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center ">
                What's
                <span class="block text-pink-600">On</span>
            </h2>
            <div class="max-w-7xl mt-8 px-8 mx-auto">
                <div class="grid  md:grid-cols-3 gap-8">
                    @foreach ($events as $event)


                    <x-event-card :event="$event">
                    </x-event-card>


                    @endforeach
                </div>
                <div class="mt-8 text-center">
                    <x-link link="/events.html" label="All Events" target="_self" />
                </div>
            </div>

        </div>
    </div>


    {{-- Quick Links

    <div class="py-12">

        <div class="max-w-7xl mx-auto p-8">
            <h3 class="text-3xl text-pink-600 text-center">Important Links</h3>
            <div class="grid grid-cols-2 lg:grid-cols-3 mt-4 gap-4 justify-between">
                <div class="p-4 text-center"><a target="_blank" href="#">
                        <img class="mx-auto" src="{{ asset('storage/images/layout') }}/placeholder.png"
                            alt="Chinley Community Association"></a>
                </div>


            </div>
        </div>

    </div> --}}

    <div class="text-gray-100 bg-gray-800">
        @include('assets.wave')
    </div>
    <div class="py-12 bg-gray-800">
        <div class="max-w-7xl mx-auto p-8 text-center">
            <h2
                class="my-8 text-gray-100 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center ">
                About
                <span class="block text-pink-600">Chinley, Buxworth & Brownside</span>
            </h2>
            <p class="mt-4 text-gray-100">
                The Chinley, Buxworth & Brownside Community Association is an organisation set up to deliver a range of
                community and leisure improvements in the Parish. It came about through the Parish Plan consultation in
                2005
                and has been set up to make the Parish a better place to live, work and spend your spare time.
            </p>
            <div class="mt-8">
                <x-link link="/about-us.html" label="Read More" target="_self" />
            </div>
        </div>
    </div>
</main>

@endsection