<div class="fixed top-0 w-full left-0 z-50 h-screen" x-show.transition="search">
    <div class="h-screen bg-gray-500 w-full absolute z-1 opacity-90 left-0"></div>
    <div class="max-w-7xl mx-auto px-4 lg:px-8 relative ">

        <input wire:model.debounce.500ms="query" class="top-8 relative w-full rounded-lg p-4 border border-gray-500"
            type="text" name="search" placeholder="search" @click.away="search = false" />

        @if (count($results))
            <div class="bg-gray-100 relative top-12 rounded-xl overflow-hidden">
                @foreach ($results as $type => $items)



                    @foreach ($items as $item)

                        <div>

                            <a class="flex items-center justify-between p-4 hover:bg-gray-200"
                                href="/{{ $type }}/{{ $item['slug'] }}">


                                <span>{{ $item['name'] ?? $item['title'] }}</span>
                                <span class="tag-{{ $type }}">{{ $type }}</span>
                            </a>

                        </div>
                    @endforeach


                @endforeach
            </div>
        @endif
        <button @click="search = false" class="top-11 right-12 absolute text-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
