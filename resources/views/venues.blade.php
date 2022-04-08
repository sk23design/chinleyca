@extends('layouts.app')
@section('head_scripts')
<title>{{$page->meta_title ?? $page->name}} - {{ config('app.name') }}</title>
<meta name="description" content="Chinley Community.">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection

@section('content')
<main>



    <section class="py-12 bg-white text-gray-800">
        <div class="max-w-4xl px-8 mx-auto">

            <h2
                class="my-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center">
                Local
                <span class="block text-pink-600">Venues</span>
            </h2>
            <p class="mt-4 text-center"> {{$page->intro}}</p>
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