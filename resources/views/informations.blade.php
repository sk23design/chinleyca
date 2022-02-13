@extends('layouts.app')
@section('head_scripts')
<title>Information - {{config('app.name')}}</title>
<meta name="description" content="This is where we publish all
our documents.
Please choose a section below to view related documents.">
@endsection
@section('content')
<header class="relative bg-gray-100 lg:bg-gray-50">
  <div class="relative pt-10 sm:pb-10 md:py-18 lg:py-24 px-4 sm:px-8 mx-auto lg:max-w-7xl">
    <div class="mx-auto max-w-md sm:max-w-3xl lg:max-w-none lg:w-1/2 lg:mx-0">
      <h1
        class="relative z-10 my-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center lg:text-left">
        Chinley, Buxworth & Brownside
        <span class="block text-pink-600">Information</span>
      </h1>
      <p class=" relative z-10 mb-10 mx-auto text-gray-600 text-lg sm:text-xl md:max-w-xl lg:max-w-none">
        The Chinley, Buxworth & Brownside Community Association is an organisation set up to deliver a range
        of community and leisure improvements in the Parish. It came about through the Parish Plan
        consultation in 2005 and has been set up to make the Parish a better place to live, work and spend
        your spare time.
      </p>

      <div class="flex justify-center sm:justify-start">
        <span class="rounded-md shadow">
          <a href="#book"
            class="flex items-center justify-center border border-transparent text-base leading-6 font-medium rounded-md text-white bg-pink-600 hover:bg-pink-800 focus:outline-none  focus:shadow-outline-teal transition duration-150 ease-in-out px-8 py-3 md:py-2 md:px-8 md:text-lg">Read
            More..</a>
        </span>
      </div>
    </div>
  </div>

  <div class="relative -mt-15 sm:mt-0 w-full sm:h-72 md:h-96 lg:h-full lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <picture>
      <img src="{{ asset('storage/images/slider/slider1.jpg') }}"
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

<div>

  <div class="bg-gray-100">

    <div class="max-w-7xl mx-auto py-16 px-8">
      <div class="classes grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-4 ">

        @foreach ($informations as $information)


        <a class="min-w-1/4 block p-4 information shadow-sm transform hover:rotate-2 hover:scale-105 hover:shadow-2xl text-center"
          href="information/{{$information->slug}}">
          <h2 class="text-2xl font-bold">{{$information->name}}</h2 class="text-2xl">
          <p class="mt-2">{{$information->intro}}</p>
        </a>







        @endforeach
      </div>
    </div>

  </div>

</div>
@include('includes.blurb')
@endsection