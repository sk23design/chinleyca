<div>
    {{-- <div>

        Contact: {{$room->venue->contact_name}}
        Contact Email: {{$room->venue->email}}
        Contact Phone: {{$room->venue->contact_phone}}
    </div> --}}
    <form wire:submit.prevent="book()">
        @csrf

        <h3>Book Here</h3>

        <div>
            @if (session()->has('message'))
                <div class="bg-green-500 text-white p-4 rounded-md mb-8">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="grid grid-cols-3 gap-4">

            <div>
                <label class="block font-bold " for="">Date</label>
                <input class="border mt-2 w-full block p-4 rounded-md" type="date" wire:model="date" id="">
                @error('date')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block font-bold " for="">Start Time</label>
                <input class="border mt-2 w-full block p-4 rounded-md" type="time" wire:model="time" id="">
                @error('time')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="block font-bold " for="">Duration in Hours</label>
                <input class="border mt-2 w-full block p-4 rounded-md" type="number" wire:model="duration"
                    id="">
                @error('duration')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>


        </div>
        <div class="grid grid-cols-3 gap-4 mt-4">
            {{-- name --}}
            <div>
                <label class="block font-bold " for="">Name</label>
                <input class="border mt-2 w-full block p-4 rounded-md" type="text" wire:model="name" id="">
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="block font-bold " for="">Email</label>
                <input class="border mt-2 w-full block p-4 rounded-md" type="email" wire:model="email" id="">
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>


            <div>
                <label class="block font-bold " for="">Phone</label>
                <input class="border mt-2 w-full block p-4 rounded-md" type="text" wire:model="phone" id="">
            </div>


        </div>
        <div>
            <button class="bg-blue-500 text-white p-2 px-4 rounded-md mt-4" type="submit">Book</button>
        </div>


    </form>


</div>
