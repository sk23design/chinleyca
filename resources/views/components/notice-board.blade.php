@if (count($notices))

    <section class="py-12 bg-gray-700 text-white">
        <div class="max-w-7xl px-8 mx-auto ">
            <h2
                class="my-8 text-white font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center ">
                Notice
                <span class="block text-gray-500">Board</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($notices as $notice)
           
                        <div class="">
                            <img class="shadow-lg h-96 mx-auto object-cover border-8 border-white "
                                src="{{ asset('storage') }}/{{ $notice->poster }}" alt="">
                            <div class="mt-8 text-center">
                                <h3 class="text-2xl font-bold"> {{ $notice->name }}</h3>
                                <p class="mt-4">{!! $notice->intro !!}</p>

                            </div>

                        </div>
            
                @endforeach
            </div>
        </div>
    </section>
    <div class="text-gray-700 bg-gray-100">
        @include('assets.wave')
    </div>
@endif
