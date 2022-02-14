@extends('layouts.app')
@section('head_scripts')
<title>{{ $venue->name }} in {{ $venue->town }} - {{ config('app.name') }}</title>
<meta name="description" content="{{ $venue->intro }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection

@section('content')
<main>
    <header class="relative bg-gray-100">
        <div class="relative pt-10 sm:pb-10 md:py-18 lg:py-24 px-4 sm:px-8 mx-auto lg:max-w-7xl">
            <div class="mx-auto max-w-md sm:max-w-3xl lg:max-w-none lg:w-1/2 lg:mx-0">

                <h1
                    class="mb-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center lg:text-left relative z-10">
                    {{ $venue->name }}
                    <span class="block text-pink-600">{{ $venue->town }}</span>
                </h1>
                <p class="mb-10 mx-auto text-gray-600 text-lg sm:text-xl md:max-w-xl lg:max-w-none relative z-10">
                    {{ $venue->intro }}
                </p>

                <div class="">
                    @if ($venue->use_external_website)
                    <p class="mb-10 mx-auto text-gray-600 text-lg sm:text-xl md:max-w-xl lg:max-w-none relative z-10">
                        Bookings and enquiries should be made directly with {{$venue->name}}.
                    </p>
                    <a href="{{$venue->website}}" target="_blank"
                        class="inline-flex items-center justify-center border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:border-teal-600 focus:shadow-outline-teal transition duration-150 ease-in-out px-8 py-3 md:py-2 md:px-8 md:text-lg">Book
                        {{ $venue->name }} <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg></a>
                    @else
                    <span class="rounded-md shadow">
                        <a href="#info"
                            class="inline-flex items-center justify-center border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:border-teal-600 focus:shadow-outline-teal transition duration-150 ease-in-out px-8 py-3 md:py-2 md:px-8 md:text-lg">Info
                        </a>
                    </span>
                    <span class="rounded-md shadow">
                        <a href="#enquire"
                            class="inline-flex items-center justify-center border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:border-teal-600 focus:shadow-outline-teal transition duration-150 ease-in-out px-8 py-3 md:py-2 md:px-8 md:text-lg">Enquire
                        </a>
                    </span>

                    <span class="rounded-md shadow">
                        <a href="#events"
                            class="inline-flex items-center justify-center border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:border-teal-600 focus:shadow-outline-teal transition duration-150 ease-in-out px-8 py-3 md:py-2 md:px-8 md:text-lg">Events
                        </a>
                    </span>
                    @endif

                </div>
            </div>
        </div>

        <div
            class="relative  -mt-15 sm:mt-0 w-full sm:h-72 md:h-96 lg:h-full lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <picture>
                <img src="{{ asset($venue->cover_image) }}"
                    class="sm:absolute sm:inset-0 sm:w-full sm:h-full sm:object-cover" alt="{{ $venue->name }}"
                    aria-hidden="true">
            </picture>
        </div>


        <svg class="block lg:hidden absolute top-0 left-0 w-full text-gray-50 " viewBox="0 0 411 201">
            <path
                d="M0 0C80.0392 0 322.5 0 322.5 0C322.5 0 330.534 0 411 0C411 0 411 5.1327 411 25.5C411 39 343.5 38 276.5 105.5C209.5 173 146 105.5 86.5 140.5C27 175.5 0 201 0 201V0Z"
                fill="currentColor"></path>
        </svg>


        <svg class="hidden lg:block absolute right-1/2 inset-y-0 h-full w-48 text-gray-100 transform translate-x-1/2 "
            fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M50 0h50L50 100H0z"></path>
        </svg>
    </header>
    <div class="bg-gray-50 pt-12 sm:pt-16" id="info">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    About {{$venue->name}}
                </h2>
                <p class="mt-3 text-xl leading-7 text-gray-500 sm:mt-4">
                    {{$venue->description}}
                </p>
            </div>
        </div>
        <div class="py-12">
            <div class="relative">

                <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-7xl mx-auto">
                        <dl class="rounded-lg bg-white shadow-lg md:grid md:grid-cols-3 items-start">
                            <div class="border-b border-gray-100 p-6 text-center md:border-0 md:border-r">
                                <dt class="text-2xl leading-none font-extrabold text-pink-600">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-gray-400 mx-auto mb-4"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                    </svg>
                                    Capactity {{$venue->capacity}}</abbr>
                                </dt>
                                <dd class="mt-3 text-gray-600 md:text-center">
                                    {{$venue->name}} has a capacity of {{$venue->capacity}}
                                </dd>
                            </div>
                            <div
                                class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                                <dt class="text-2xl leading-none font-extrabold text-pink-600">


                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-gray-400 mx-auto mb-4"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Location
                                </dt>
                                <dd class="mt-3 text-gray-600 md:text-center">
                                    {{$venue->name}}.<br>
                                    {{$venue->address1}},<br>
                                    {{$venue->address2 ?? $venue->address2 . "\n"}}
                                    {{$venue->town}},<br>
                                    {{$venue->county}}.<br>
                                    {{$venue->postcode}}
                                </dd>
                            </div>
                            <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                                <dt class="text-2xl leading-none font-extrabold text-pink-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                    Bookings
                                </dt>
                                <dd class="mt-3 text-gray-600 md:text-center">
                                    £{{$venue->price}} Per Hour<br>
                                    Minimum Booking: {{$venue->minimum_booking}} {{Str::plural('hour',
                                    $venue->minimum_booking);}}
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        @if ($venue->maplink()=='bob')


        <div class="py-12 bg-white">
            <div class="relative">

                <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-7xl mx-auto">
                        <div class="rounded-lg bg-white shadow-lg md:grid md:grid-cols-1 items-start">
                            <iframe src="{{$venue->maplink()}}" width="100%" height="600" style="border:0;"
                                allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div id="events" class="text-gray-50 bg-gray-100">
        @include('assets.wave')
    </div>
    <div>
        <div class="bg-gray-100 py-12">

            <h2
                class="my-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-3xl sm:text-4xl text-center ">
                What's On
                <span class="block text-pink-600">{{$venue->name}}</span>
            </h2>
            <div class="max-w-7xl mt-8 px-8 mx-auto">
                <div class="grid md:grid-cols-3 gap-8 ">
                    @forelse ($venue->events as $event)


                    <x-event-card :event="$event">
                    </x-event-card>

                    @empty
                    <div></div>
                    <h2
                        class="my-8 mx-auto text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-2xl sm:text-3xl text-center ">
                        No Events

                    </h2>
                    <div></div>
                    @endforelse
                </div>
                <div class="mt-8 text-center">
                    <x-link link="/events" label="All Events" target="_self" />
                </div>
            </div>

        </div>
    </div>

    <div class="text-gray-100 bg-blue-500">
        @include('assets.wave')
    </div>
    <div class="py-12 bg-blue-500 ">

        <div class="relative max-w-screen-xl mx-auto px-4 py-12 sm:px-6 lg:pl-12 lg:pr-8 lg:py-16">
            <div class="md:ml-auto md:w-1/2 md:pl-10 mx-auto
            ">
                <div class="text-base leading-6 font-semibold uppercase tracking-wider text-gray-300">
                    Looking to book {{ $venue->name }}?
                </div>
                <h2 id="enquire" class="mt-2 text-white text-3xl leading-9 font-extrabold sm:text-4xl sm:leading-10">
                    Enquire Here
                </h2>
                <p class="mt-3 text-lg leading-7 text-gray-300">
                    {{ $venue->name }} is available for public bookings , e.g Childrens parties.
                </p>

                <form action="" method="POST" class="mt-8">

                    <div>
                        <label for="contactName" class="block text-sm font-medium leading-5 text-white">Your
                            name</label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="contact-fullName" name="fullName" autocomplete="name" autocapitalize="words"
                                type="text" maxlength="70" required=""
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="contactEmail" class="block text-sm font-medium leading-5 text-white">Email
                            address</label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="contact-email" name="email" autocomplete="email" type="email" maxlength="254"
                                required=""
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="flex justify-between">
                            <label for="contact-phone" class="block text-sm font-medium leading-5 text-white">Phone
                                number</label>
                            <span class="text-xs leading-5 text-gray-300" id="contact-phone-optional">Optional</span>
                        </div>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="contact-phone" name="phone" autocomplete="tel" type="tel"
                                aria-describedby="contact-phone-optional"
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>


                    <div class="mt-8">
                        <span class="inline-flex rounded-md shadow">
                            <button type="submit"
                                class="w-full flex items-center justify-center border border-transparent text-base leading-6 font-medium rounded-md text-gray-900 bg-white hover:text-pink-600 focus:outline-none focus:text-pink-600 focus:shadow-outline transition duration-150 ease-in-out px-5 py-3">
                                Send your request
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection