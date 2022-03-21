{{-- Mobile Nav --}}
<div class="">
    <div class="fixed top-0 left-0 h-screen w-full bg-gray-800 z-50 bg-opacity-80" x-show.transition="show"
        @click.away="show = false" x-cloak>
        <nav>
            <ul class=" text-2xl font-bold p-10 text-center">
                @foreach ($menu as $item)
                <li><a class="{{ request()->is($item->slug) ? 'text-white' : 'text-white' }} p-4 block
                    py-2" href="/{{$item->slug}}">{{$item->name}}</a></li>

                @endforeach





            </ul>
        </nav>
        <div>
            <button @click="show = false" class="top-6 right-4 absolute text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

        </div>
    </div>
</div>