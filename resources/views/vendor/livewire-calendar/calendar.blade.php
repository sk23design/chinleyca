<div @if($pollMillis !==null && $pollAction !==null) wire:poll.{{ $pollMillis }}ms="{{ $pollAction }}"
    @elseif($pollMillis !==null) wire:poll.{{ $pollMillis }}ms @endif>
    <div>
        @includeIf($beforeCalendarView)
    </div>
    <div class="flex justify-between pb-4 align-middle items-center">

        <button class="px-4 py-2 rounded bg-teal-600 text-white flex item gap-2" wire:click="goToPreviousMonth"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
          </svg>
          <span>Prev</span></button>
        <h3 class="text-heading text-2xl">{{Carbon\Carbon::parse($startsAt)->format('F Y')}}</h3>
        <button class="px-4 py-2 rounded bg-teal-600 text-white flex item gap-2" wire:click="goToNextMonth">      <span>Next</span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
          </svg>
    </button>

    </div>


    <div class="flex">


        <div class="overflow-x-auto w-full">
            <div class="inline-block min-w-full overflow-hidden">

                <div class="w-full flex flex-row">
                    @foreach($monthGrid->first() as $day)
                    @include($dayOfWeekView, ['day' => $day])
                    @endforeach
                </div>

                @foreach($monthGrid as $week)
                <div class="w-full flex flex-row">
                    @foreach($week as $day)
                    @include($dayView, [
                    'componentId' => $componentId,
                    'day' => $day,
                    'dayInMonth' => $day->isSameMonth($startsAt),
                    'isToday' => $day->isToday(),
                    'events' => $getEventsForDay($day, $events),
                    ])
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div>
        @includeIf($afterCalendarView)
    </div>
</div>