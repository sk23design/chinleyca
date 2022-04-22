<div class="bg-gray-100 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
    <a href="/venue/{{ $venue->slug }}">
        <img class="h-64 object-cover w-full" src="{{ asset('storage') }}/{{$venue->cover_image}}" alt="" srcset="">

        <div class="p-5">

            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $venue->name }}</h2>

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$venue->intro()}}</p>
            <button class="inline-flex align-middle items-center text-teal-600 font-bold">
                <span>Venue Details</span>
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