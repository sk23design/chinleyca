<div @if($eventClickEnabled) wire:click.stop="onEventClick('{{ $event['id']  }}')" @endif
    class="bg-white rounded-lg border py-2 px-3 shadow-md cursor-pointer">

    <p class="text-sm font-medium">
        {{ $event['title'] }}

        @if(isset($event->classroom))
        <span
            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">{{$event->classroom->name}}</span>
        @endif
    </p>

</div>