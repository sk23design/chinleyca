<div
    class="bg-white rounded-lg border py-2 px-3 shadow-md cursor-pointer">

    <p class="text-sm font-medium">
        {{\Carbon\Carbon::parse($event['start'])->format('H:i')}} - {{ $event['title'] }}

 
    </p>

</div>