@extends('layouts.app')
@section('head_scripts')
<title>About - {{config('app.name')}}</title>
<meta name="description" content="">
@endsection
@section('content')
<header class="relative bg-gray-100 lg:bg-gray-50">
    <div class="relative pt-10 sm:pb-10 md:py-18 lg:py-24 px-4 sm:px-8 mx-auto lg:max-w-7xl">
        <div class="mx-auto max-w-md sm:max-w-3xl lg:max-w-none lg:w-1/2 lg:mx-0">
            <h1
                class="relative z-10 my-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center lg:text-left">
                Chinley, Buxworth & Brownside Association
                <span class="block text-teal-600">{{$page->name}}</span>
            </h1>
            <p class="relative z-10 mb-10 mx-auto text-gray-600 text-center md:text-left text-lg sm:text-xl md:max-w-xl lg:max-w-none">
                {{$page->intro}}

            </p>


        </div>
    </div>

    <div class="relative -mt-15 sm:mt-0 w-full sm:h-72 md:h-96 lg:h-full lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <picture>
            <img src="{{ asset('storage') }}/{{$page->cover_image}}"
                class="sm:absolute sm:inset-0 sm:w-full sm:h-full sm:object-cover" alt="Venue" aria-hidden="true">
        </picture>
    </div>




    <svg class="hidden lg:block absolute right-1/2 inset-y-0 h-full w-48 text-gray-50 transform translate-x-1/2"
        fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M50 0h50L50 100H0z"></path>
    </svg>
</header>
<section class="bg-gray-100 py-12">

    <div class="max-w-6xl mx-auto py-8 px-8 bg-white rounded-xl  shadow-xl">
    


        <h2
            class="my-8 text-teal-500 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center ">
            {{$page->subtitle}}
        </h2>

        <div class="content">
            {!!$page->description!!}
        </div>



    </div>
</section>
<section class="bg-gray-100 py-12">

  <div class="max-w-6xl mx-auto py-8 px-8 bg-white rounded-xl  shadow-xl">
  


    @livewire('contact')



  </div>
</section>
@if (count($page->documents))
<section class="bg-gray-100 py-12">

  <div class="max-w-5xl mx-auto py-8 px-8 bg-white rounded-xl  shadow-xl">
    <h2
      class="my-8 text-teal-400 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center ">
      Related
      <span class="block text-teal-500">Documents</span>
    </h2>


    <div class="documents mt-8">
      @forelse ($page->documents as $document)
      <x-document :document=$document></x-document>
      @empty
      <div>Currently No Documents To Show.</div>
      @endforelse
      {{-- <div class="mt-4">
        {{$documents->links()}}
      </div> --}}
    </div>


  </div>
</section>
@endif
@include('includes.blurb')


<script>
    function scrollToElement($el)
  {

    var anchor = document.querySelector($el);
    anchor.scrollIntoView();

  }

</script>
@endsection