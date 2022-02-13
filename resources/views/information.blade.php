@extends('layouts.app')
@section('head_scripts')
<title>{{$information->name}} - {{config('app.name')}}</title>
<meta name="description" content="{{$information->name}}">
@endsection
@section('content')
<header class="relative bg-gray-100 lg:bg-gray-50">
  <div class="relative pt-10 sm:pb-10 md:py-18 lg:py-24 px-4 sm:px-8 mx-auto lg:max-w-7xl">
    <div class="mx-auto max-w-md sm:max-w-3xl lg:max-w-none lg:w-1/2 lg:mx-0">
      <h1
        class="relative z-10 my-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center lg:text-left">
        Information
        <span class="block text-pink-600">{{$information->name}}</span>
      </h1>
      <p class="relative z-10 mb-10 mx-auto text-gray-600 text-lg sm:text-xl md:max-w-xl lg:max-w-none">
        {{$information->intro}}
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




  <svg class="hidden lg:block absolute right-1/2 inset-y-0 h-full w-48 text-gray-50 transform translate-x-1/2"
    fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M50 0h50L50 100H0z"></path>
  </svg>
</header>
<section class="bg-gray-100 py-12">

  <div class="max-w-5xl mx-auto py-8 px-8 bg-white rounded-xl shadow-xl">
    <div class="content text-left">
      {!!$information->description!!}
    </div>



  </div>

</section>
<section class="bg-gray-100">

  <div class="max-w-5xl mx-auto py-8 px-8 bg-white rounded-xl  shadow-xl">
    <h2
      class="my-8 text-pink-400 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center ">
      Related
      <span class="block text-pink-500">Documents</span>
    </h2>

    @if ($information->documents)
    <div class="documents mt-8">
      @forelse ($information->documents as $document)
      <x-document :document=$document></x-document>
      @empty
      <div>Currently No Documents To Show.</div>
      @endforelse
      {{-- <div class="mt-4">
        {{$documents->links()}}
      </div> --}}
    </div>
    @endif

  </div>
</section>

@include('includes.blurb')


<script>
  function scrollToElement($el)
  {

    var anchor = document.querySelector($el);
    anchor.scrollIntoView();

  }

</script>
@endsection