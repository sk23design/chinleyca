@extends('layouts.app')
@section('head_scripts')
    <title>Home - {{ config('app.name') }}</title>
    <meta name="description" content="Chinley Community.">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection

@section('content')
    {{-- <x-slider /> --}}

    @include('components.slider',['slides'=>[
    ['intro'=>'Chinley Community Association','title'=>'Title','slide'=>'slider1.jpg'],


    ]
    ])
    {{-- Notification --}}
    {{-- <div class="bg-blue-400 text-white text-center">
    <h2 class="p-4 text-xl">Notification</h2>
</div> --}}

    {{-- Tag Line --}}

    {{-- Intro --}}
    <div class="max-w-7xl mx-auto p-8">
        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-8 p-4">

                <h2 class="text-2xl effect-4 text-pink-600"></h2>

                <p class="mt-4"></p>
            </div>


        </div>

    </div>



    {{-- Around School --}}
    <div>
        <div class="bg-gray-100 py-12">
            <h3 class="text-3xl text-pink-600 text-center">Venues</h3>
            <div class="gallery p-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto px-8 mt-2">

                    @foreach ($venues as $venue)


                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <a href="/venue/{{ $venue->slug }}">
                                <img class="h-64 object-cover" src="{{ asset($venue->cover_image) }}" alt="" srcset="">

                                <div class="p-5">

                                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $venue->name }}</h2>

                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                        enterprise
                                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                    <button
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Read more
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


                    @endforeach

                </div>
            </div>
        </div>
    </div>


    {{-- Quick Links --}}

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

    </div>

    @if ($events ?? '')
        <div class="bg-gray-100 py-12">
            <h3 class="text-3xl text-pink-600 text-center">Events</h3>
            @include('includes.events-list')
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto p-8 text-center">
            <h3 class="text-3xl text-pink-600 text-center">Everyone at Chinley Community Association is committed to
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
                <a class="text-pink-600 font-bold underline" href="{{ url('information') }}">Information</a>
                section under safeguarding.
            </p>

        </div>
    </div>
@endsection
