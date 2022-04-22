@if ($document->expires_at && $document->expires_at->isPast())

{{-- Check for document expires --}}

@else
<div class="flex justify-between gap-4 items-center border-b border-blue-300">
    <div class="p-4 text-teal-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
        </svg>
    </div>
    <div class="flex-1 text-left">
        <h3 class="text-teal-500"> <a href="{{asset('storage')}}/{{$document->link ?? $document->upload}}"
                target="_blank">{{$document->name}}</a></h3>
        <p class="text-gray-500">{{$document->created_at ? $document->created_at->format('d F Y'):''}}</p>
    </div>
    <div>
        <a href="{{asset('storage')}}/{{$document->link ?? $document->upload}}" target="_blank"
            class="btn download flex"> <span class="font-bold">Download</span></a>
    </div>

</div>
@endif