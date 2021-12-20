@extends('layouts.app')
@section('head_scripts')
    <title>Home - {{ config('app.name') }}</title>
    <meta name="description" content="Chinley Community.">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection

@section('content')




    {{-- Tag Line --}}

    {{-- Intro --}}
    <section class="relative bg-cover h-96" style="background-image:url('{{ asset($venue->cover_image) }}');">
        <div class="w-full h-full absolute bg-gray-800 opacity-40"></div>
        <div class="max-w-7xl mx-auto px-8 z-10 relative">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-8 py-12">

                    <h1 class="text-4xl effect-4 text-white">
                        {{ $venue->name }}
                    </h1>

                    <p class="mt-4 text-white"> {{ $venue->intro }}</p>
                </div>


            </div>

        </div>
    </section>


    {{-- Whats On At Venue --}}
    <section>
        <div class="bg-gray-100 py-12">
            <h3 class="text-3xl text-blue-600 text-center">What's On At {{ $venue->name }}</h3>
            <div class="gallery p-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto px-8 mt-2">


                    <div>
                        <a href="/venue/{{ $venue->slug }}">
                            <div>
                                <img class="h-64 object-cover" src="{{ asset($venue->cover_image) }}" alt="" srcset="">
                            </div>
                            <div class="text-center">
                                <h2>{{ $venue->name }}</h2>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </section>


    {{-- Quick Links --}}



    @if ($events ?? '')
        <div class="bg-gray-100 py-12">
            <h3 class="text-3xl text-blue-600 text-center">Events</h3>
            @include('includes.events-list')
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto p-8 text-center">
            <h3 class="text-3xl text-blue-600 text-center">Everyone at Chinley Community Association is committed to
                ensuring the
                safety and well-being of all the children in
                our
                care.</h3>
            <h3 class="mt-4">We take safeguarding very seriously. If you are worried about a child, don’t wait.
                Contact Mr.
                Lambert or Mrs.
                Glover in confidence, who are the designated lead teachers for safeguarding in school.</h3>
            <p class="mt-4">
                Further information about our policies and procedures with regards to safeguarding can be found in the
                <a class="text-blue-600 font-bold underline" href="{{ url('information') }}">Information</a>
                section under safeguarding.
            </p>

        </div>
    </div>
@endsection
