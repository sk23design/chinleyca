<div class="swiper-container home-slider overflow-hidden">
    <div class="swiper-wrapper">
        @foreach ($slides as $item)
        <div class="swiper-slide relative bg-gray-900">




            <img @if ($loop->index > 1)

            loading="lazy"
            @endif alt="{{$item['intro']}}" class="w-full object-cover" alt="alt text image"
            src="{{ asset('')}}thumbnail/slider/{{ $item['slide'] }}" srcset="
            {{ asset('')}}thumbnail/slider/{{ $item['slide'] }} 640w,
            {{asset('storage/images/slider') }}/{{ $item['slide'] }} 916w,
            {{asset('storage/images/slider') }}/{{ $item['slide'] }} 1030w
            " sizes="
            (min-width: 1366px) 916px,
            (min-width: 1536px) 1030px,
            100vw
            ">



        </div>
        @endforeach


    </div>
</div>


<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".home-slider", {

        effect: "fade",
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },

    });
</script>