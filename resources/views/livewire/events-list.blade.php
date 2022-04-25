<section>
    <div class="hidden md:flex gap-4">
        @foreach ($categories as $category)
        <button wire:click="setCurrentCategory({{$category->id}})"
            class="rounded-lg p-2 px-4 border-2 border-teal-500  font-bold @if($category->id== $current_category) bg-teal-600 text-white hover:text-white hover:bg-teal-600 @else bg-white text-teal-600 hover:text-white hover:bg-teal-600 @endif">
            {{$category->name}}
        </button>

        @endforeach
        <button wire:click="resetCurrentCategory()"
            class="border-2 border-teal-500 rounded-lg p-2 px-4 bg-white font-bold text-teal-600 hover:text-white hover:bg-teal-600">
            All
        </button>




    </div>

    <select class="md:hidden p-4 border-2 border-teal-500 rounded-lg w-full" wire:model="current_category" id="">
        @foreach ($categories as $category)
        <option value="{{$category->id}}"> {{$category->name}}</option>
        @endforeach
    </select>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">


        @forelse ($events as $event)
        <x-event-card :event="$event"></x-event-card>
        @empty
        <div class="col-start-1 col-end-5">
            <p class="text-gray-600 font-bold text-center">We dont currently have any events in this category.
  
            </p>
        </div>


        @endforelse
    </div>
</section>