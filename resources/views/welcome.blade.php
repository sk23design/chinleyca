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

        <div class="swiper homeslider">
            <div class="swiper-wrapper">

                @for ($i = 1; $i < 6; $i++) <div class="swiper-slide">

                    <div class="relative pt-10 sm:pb-10 md:py-18 lg:py-24 px-4 sm:px-8 mx-auto lg:max-w-7xl">
                        <div class="mx-auto max-w-md sm:max-w-3xl lg:max-w-none lg:w-1/2 lg:mx-0">
                            <div class="w-32 mx-auto md:mx-0"> @include('assets.logo')</div>
                            <h1
                                class="relative z-10 my-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center lg:text-left">
                                Chinley, Buxworth & Brownside
                                <span class="block text-pink-600">Community Association</span>
                            </h1>
                            <p
                                class="relative z-10 mb-10 mx-auto text-gray-600 text-lg sm:text-xl md:max-w-xl lg:max-w-none">
                                Chinley Buxworth and Brownside Community Association are a charity supporting community
                                activity in
                                the Parish.
                                We were established in 2006 following the first Parish Plan, and have been growing
                                and developing
                                ever since.

                            </p>

                            <p
                                class="relative z-10 mb-10 mx-auto text-gray-600 text-lg sm:text-xl md:max-w-xl lg:max-w-none">
                                Our volunteers work with other community organisations to provide and promote community
                                activities, events and venues for all.
                                For more information about the Community Association and how we operate, </p>


                        </div>
                    </div>

                    <div
                        class="relative -mt-15 sm:mt-0 w-full sm:h-72 md:h-96 lg:h-full lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                        <picture>
                            <img src="{{ asset('storage/images/slider/slider'.$i.'.jpg') }}"
                                class="sm:absolute sm:inset-0 sm:w-full sm:h-full sm:object-cover" alt="Venue"
                                aria-hidden="true">
                        </picture>
                    </div>





                    <svg class="hidden lg:block absolute right-1/2 inset-y-0 h-full w-48 text-gray-50 transform translate-x-1/2"
                        fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path d="M50 0h50L50 100H0z"></path>
                    </svg>

            </div>


            @endfor
        </div>
        </div>
    </header>


    </section>

    <section class="py-12 bg-gray-100">

        <div class="max-w-7xl px-8 mx-auto text-gray-800 ">
            <h2
                class="my-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center ">
                Discover
                <span class="block text-pink-600">Chinley, Buxworth & Brownside</span>
            </h2>
            <p class="mt-4 text-center">{{$page->intro}}</p>
        </div>

        <div class="max-w-7xl mx-auto px-8 mt-8">
            <div class="grid  md:grid-cols-3 gap-8">

                @foreach ($villages as $village) <div
                    class="text-center bg-pink-{{ 5 +$loop->index . '00' }} text-white overflow-hidden rounded-xl shadow-lg">

                    <div class="w-full mx-auto">
                        <img src="{{ asset('storage') }}/{{$village->cover_image}}"
                            class="h-72 object-cover w-full overflow-hidden" alt="Venue" aria-hidden="true">
                    </div>
                    <div class="p-8">
                        <h3 class="text-3xl font-bold">
                            {{$village->name}}
                        </h3>
                        <p class="mt-4">
                            {{$village->intro}}
                        </p>
                        {{-- <button
                            class="inline-flex align-middle items-center mt-4 font-bold bg-white text-pink-600 px-4 py-2 rounded-full">
                            <span>Read more</span>
                            <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button> --}}
                    </div>

                </div>

                @endforeach

            </div>

        </div>
    </section>



    <section class="py-12 bg-white text-gray-800">
        <div class="max-w-4xl px-8 mx-auto">

            <h2
                class="my-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center">
                Local
                <span class="block text-pink-600">Venues</span>
            </h2>
            <p class="mt-4 text-center">Our website provides information on activities groups and events, community
                facilities and spaces and services provided by us and the many organisations across the parish.</p>
        </div>

        <div class="max-w-7xl mt-8 px-8 mx-auto">
            <div class="grid  md:grid-cols-3 gap-8">
                @foreach ($venues as $venue)


                <x-venue-card :venue="$venue"></x-venue-card>


                @endforeach
            </div>

        </div>
        <div class="mt-8 text-center">
            <x-link link="/venues" label="View All Venues" target="_self" />
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
                    <x-link link="/events" label="All Events" target="_self" />
                </div>
            </div>

        </div>
    </div>


    <x-facebook-feed />
    @include('includes.blurb')

</main>
<script>
    var swiper = new Swiper(".homeslider", {
        spaceBetween: 0,
     
        centeredSlides: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
      
      });
</script>
@endsection