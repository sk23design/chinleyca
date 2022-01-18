<section>
    <div class="flex gap-4">
        @foreach ($categories as $category)
        <button wire:click="setCurrentCategory({{$category->id}})"
            class="rounded-lg p-2 px-4  font-bold @if($category->id== $current_category) bg-pink-600 text-white hover:text-white hover:bg-pink-600 @else bg-white text-pink-600 hover:text-white hover:bg-pink-600 @endif">
            {{$category->name}}
        </button>

        @endforeach
        <button wire:click="resetCurrentCategory()"
            class="rounded-lg p-2 px-4 bg-white font-bold text-pink-600 hover:text-white hover:bg-pink-600">
            All
        </button>

    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
        @foreach ($events as $event)
        <x-event-card :event="$event"></x-event-card>
        @endforeach
    </div>
</section>