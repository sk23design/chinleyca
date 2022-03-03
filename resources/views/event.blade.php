@extends('layouts.app')
@section('head_scripts')
<title>{{ $event->title }} in {{ $event->town }} - {{ config('app.name') }}</title>
<meta name="description" content="{{ $event->intro }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection

@section('content')
<main>
    <header class="relative bg-cool-gray-100 lg:bg-gray-50">
        <div class="relative pt-10 sm:pb-10 md:py-18 lg:py-24 px-4 sm:px-8 mx-auto lg:max-w-7xl">
            <div class="mx-auto max-w-md sm:max-w-3xl lg:max-w-none lg:w-1/2 lg:mx-0">

                <h1
                    class="mb-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center lg:text-left relative z-10">
                    {{ $event->title }}
                    <span class="block text-pink-600">{{ $event->venue->name }}</span>
                </h1>
                <p class="mb-10 mx-auto text-gray-600 text-lg sm:text-xl md:max-w-xl lg:max-w-none">
                    {{ $event->intro }}
                </p>

                <div class="flex justify-center sm:justify-start gap-4">
                    <span class="rounded-md shadow">
                        <a href="/events"
                            class="flex items-center justify-center border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:border-teal-600 focus:shadow-outline-teal transition duration-150 ease-in-out px-8 py-3 md:py-2 md:px-8 md:text-lg">Back</a>
                    </span>
                    <span class="rounded-md shadow">
                        <a href="#book"
                            class="flex items-center justify-center border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:border-teal-600 focus:shadow-outline-teal transition duration-150 ease-in-out px-8 py-3 md:py-2 md:px-8 md:text-lg">Book
                            {{ $event->title }}</a>
                    </span>
                </div>
            </div>
        </div>

        <div
            class="relative mt-10 md:mt-0  w-full sm:h-72 md:h-96 lg:h-full lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 bg-white">
            <picture>
                <img src="{{asset('storage')}}/{{ $event->thumbnail ? $event->thumbnail : $event->venue->cover_image }}"
                    class="sm:absolute sm:inset-0 sm:w-full sm:h-full sm:object-cover" alt="{{ $event->name }}"
                    aria-hidden="true">
            </picture>
        </div>


        <svg class="hidden lg:block absolute right-1/2 inset-y-0 h-full w-48 text-gray-50 transform translate-x-1/2 "
            fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M50 0h50L50 100H0z"></path>
        </svg>
    </header>
    <div class="bg-gray-50 pt-12 sm:pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">


                <h2 class="text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    {{ $event->title }} {{ $event->getRecurringDescription() }}
                </h2>
                <div class="mt-3 text-xl leading-7 text-gray-500 sm:mt-4 content">
                    {!! $event->description !!}
                </div>
            </div>
        </div>
        <div class="mt-10 bg-white">
            <div class="relative">
                <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-7xl mx-auto">
                        <dl class="rounded-lg bg-white shadow-lg md:grid md:grid-cols-3 items-start">
                            <div class="border-b border-gray-100 p-6 text-center md:border-0 md:border-r">
                                <dt class="text-2xl leading-none font-extrabold text-pink-600">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-3 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                    {{$event->contact_name}}
                                </dt>
                                <dd class="mt-3 text-gray-600 md:text-center">

                                    {{$event->contact_email}}
                                </dd>
                            </div>
                            <div
                                class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                                <dt class="text-2xl leading-none font-extrabold text-pink-600">


                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-3 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    Phone
                                </dt>
                                <dd class="mt-3 text-gray-600 md:text-center">
                                    <a target="_blank"
                                        href="tel:{{$event->contact_number}}">{{$event->contact_number}}</a>
                                </dd>
                            </div>
                            <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                                <dt class="text-2xl leading-none font-extrabold text-pink-600">


                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-3 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                    Website
                                </dt>
                                <dd class="mt-3 text-gray-600 md:text-center">
                                    <a target="_blank" href="{{$event->website}}">{{$event->website}}</a>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($event->related())

    <div class="text-white bg-gray-100 mt-12">
        @include('assets.wave')
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-100">
        <h2
            class="py-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center ">
            Similar
            <span class="block text-pink-600">Events</span>
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 py-8">

            @foreach ($event->related() as $event)
            <x-event-card :event="$event"></x-event-card>
            @endforeach
        </div>

    </div>
    @endif
    <div class="text-gray-100 bg-blue-500">
        @include('assets.wave')
    </div>
    <div class="py-12 bg-blue-500">

        <div class="relative max-w-screen-xl mx-auto px-4 py-12 sm:px-6 lg:pl-12 lg:pr-8 lg:py-16">
            <div class="md:ml-auto md:w-1/2 md:pl-10 mx-auto">
                <div class="text-base leading-6 font-semibold uppercase tracking-wider text-gray-300">
                    Looking to book {{ $event->name }}?
                </div>
                <h2 class="mt-2 text-white text-3xl leading-9 font-extrabold sm:text-4xl sm:leading-10">
                    Book Here
                </h2>


                <form action="" method="POST" class="mt-8">

                    <div>
                        <label for="contactName" class="block text-sm font-medium leading-5 text-white">Your
                            name</label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="contact-fullName" name="fullName" autocomplete="name" autocapitalize="words"
                                type="text" maxlength="70" required=""
                                class="appearance-none block w-full px-4 py-4 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="contactEmail" class="block text-sm font-medium leading-5 text-white">Email
                            address</label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="contact-email" name="email" autocomplete="email" type="email" maxlength="254"
                                required=""
                                class="appearance-none block w-full px-4 py-4 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="flex justify-between">
                            <label for="contact-phone" class="block text-sm font-medium leading-5 text-white">Phone
                                number</label>

                        </div>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="contact-phone" name="phone" autocomplete="tel" type="tel"
                                aria-describedby="contact-phone-optional"
                                class="appearance-none block w-full px-4 py-4 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>


                    <div class="mt-8">
                        <span class="rounded-md shadow">
                            <button type="submit"
                                class="w-full border border-transparent text-base leading-6 font-medium rounded-md text-white bg-pink-600 hover:text-pink-100 focus:outline-none focus:text-pink-600 focus:shadow-outline transition duration-150 ease-in-out px-5 py-3">
                                Request A Booking
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection