@extends('layouts.transparent')
@section('head_scripts')
    <title>Home - {{ config('app.name') }}</title>
    <meta name="description" content="Chinley Community.">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection

@section('content')

    {{-- Intro --}}
    <div class="bg-blue-300">
        <div class="w-48 mx-auto p-8"> @include('assets.logo')</div>
        <div class="text-green-600">@include('assets.low-hills')</div>
    </div>
    <section class="bg-green-600">
        <div class="max-w-4xl mx-auto p-8 -mt-20">


            <h1 class="text-4xl effect-4 text-white text-center">
                Chinley, Buxworth & Brownside Community Association
            </h1>

            <p class="mt-4"></p>


        </div>
    </section>


    {{-- Main CTAs --}}

    <section>
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-3">
                <div>Section </div>
                <div>Section </div>
                <div>Section </div>
            </div>
        </div>
    </section>


    <div>
        <div class="bg-gray-100 py-12">
            <h3 class="text-3xl text-pink-600 text-center">What's On</h3>
            <div class="gallery p-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto px-8 mt-2">
                    <img class="object-cover  rounded-xl  shadow-xl "
                        src="{{ asset('storage/images/school') }}/school1.jpg" alt="Schools">
                    <img class="object-cover  rounded-xl  shadow-xl"
                        src="{{ asset('storage/images/school') }}/school2.jpg" alt="Schools">
                    <img class="object-cover  rounded-xl  shadow-xl"
                        src="{{ asset('storage/images/school') }}/school3.jpg" alt="Schools">
                    <img class="object-cover  rounded-xl  shadow-xl"
                        src="{{ asset('storage/images/school') }}/school4.jpg" alt="Schools">
                    <img class="object-cover  rounded-xl  shadow-xl"
                        src="{{ asset('storage/images/school') }}/school5.jpg" alt="Schools">
                    <img class="object-cover  rounded-xl  shadow-xl"
                        src="{{ asset('storage/images/school') }}/school6.jpg" alt="Schools">
                    <img class="object-cover  rounded-xl  shadow-xl"
                        src="{{ asset('storage/images/school') }}/school7.jpg" alt="Schools">
                    <img class="object-cover  rounded-xl  shadow-xl"
                        src="{{ asset('storage/images/school') }}/school8.jpg" alt="Schools">
                    <img class="object-cover  rounded-xl  shadow-xl"
                        src="{{ asset('storage/images/school') }}/school9.jpg" alt="Schools">
                    <img class="object-cover  rounded-xl  shadow-xl"
                        src="{{ asset('storage/images/school') }}/school10.jpg" alt="Schools">
                    <img class="object-cover  rounded-xl  shadow-xl"
                        src="{{ asset('storage/images/school') }}/school11.jpg" alt="Schools">
                    <img class="object-cover  rounded-xl  shadow-xl"
                        src="{{ asset('storage/images/school') }}/school12.jpg" alt="Schools">
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
                        <img class="mx-auto"
                            src="{{ asset('storage/images/layout') }}/department-of-education.jpg"
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
            <h3 class="text-3xl text-lime-600 text-center"> The Chinley, Buxworth & Brownside Community Association.</h3>
            <p class="mt-4">
                The Chinley, Buxworth & Brownside Community Association is an organisation set up to deliver a range of
                community and leisure improvements in the Parish. It came about through the Parish Plan consultation in 2005
                and has been set up to make the Parish a better place to live, work and spend your spare time.
            </p>

        </div>
    </div>
@endsection
