@extends('layouts.app')
@section('head_scripts')
<title>{{$page->meta_title ?? $page->name}} - {{ config('app.name') }}</title>
<meta name="description" content="Chinley Community.">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection

@section('content')
<main>
    <header class="relative bg-cool-gray-100 lg:bg-gray-50">
        <div class="relative pt-10 sm:pb-10 md:py-18 lg:py-24 px-4 sm:px-8 mx-auto lg:max-w-7xl">
            <div class="mx-auto max-w-md sm:max-w-3xl lg:max-w-none lg:w-1/2 lg:mx-0">
                <h1
                    class="relative z-10 my-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center lg:text-left">
                    Chinley, Buxworth & Brownside Community Association
                    <span class="block text-pink-600"> {{$page->name}}</span>

                </h1>
                <p
                    class="relative z-10  mb-10 mx-auto text-gray-600 text-lg sm:text-xl md:max-w-xl lg:max-w-none text-center md:text-left">
                    {{$page->intro}}
                </p>

                {{-- <div class="flex justify-center sm:justify-start">
                    <span class="rounded-md shadow">
                        <a href="#book"
                            class="flex items-center justify-center border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:border-teal-600 focus:shadow-outline-teal transition duration-150 ease-in-out px-8 py-3 md:py-2 md:px-8 md:text-lg">Book
                            Link</a>
                    </span>
                </div> --}}
            </div>
        </div>

        <div
            class="relative  -mt-15 sm:mt-0 w-full sm:h-72 md:h-96 lg:h-full lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <picture>
                <img src="{{asset('storage')}}/{{$page->cover_image}}"
                    class="sm:absolute sm:inset-0 sm:w-full sm:h-full sm:object-cover" alt="sfdfsdf" aria-hidden="true">
            </picture>
        </div>


        <svg class="hidden lg:block absolute right-1/2 inset-y-0 h-full w-48 text-gray-50 transform translate-x-1/2 "
            fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M50 0h50L50 100H0z"></path>
        </svg>
    </header>


    <section class="py-12x bg-white text-gray-800">
        <div class="max-w-4xl px-8 mx-auto">

            <h2
                class="my-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center">
                Local
                <span class="block text-pink-600">Venues</span>
            </h2>
            <p class="mt-4 text-center">We work with the other community organisations in the Parish to signpost to each
                other's facilities as there is usually a venue to meet the need. For details of the other community
                facilities for hire, see below.</p>
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




    {{-- Quick Links --}}
    {{--
    <div class="py-12">

        <div class="max-w-7xl mx-auto p-8">
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

    </div> --}}

    @if ($events ?? '')
    <div class="bg-gray-100 py-12">
        <h3 class="text-3xl text-pink-600 text-center">Events</h3>
        @include('includes.events-list')
    </div>
    @endif

    @include('includes.blurb')
</main>
@endsection