<section class="py-12 bg-gray-100">
    <h2
        class="my-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center ">
        Facebook
        <span class="block text-teal-600">Feed</span>
    </h2>



    <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-8 px-8">


        @empty($feed)
        <p class="text-center font-bold text-gray-600">
            sorry the feed cannot be retrieved from Facebook
        </p>

        @endempty

        @foreach ($feed as $item)



        <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
            <a href="{{$item['permalink_url']}}" target="_blank">
                @isset ($item['full_picture'])
                <img class="h-64 object-cover w-full bg-gray-200" src="{{$item['full_picture'] }}" alt="">
       
                   @else 
                   <div class="h-64 w-full bg-gray-200 p-8">
                 @include('assets.logo')</div>
                @endisset
               

                <div class="p-5">

                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{$item['created_time']}}</h2>
                    <p>{{$item['from']['name']}}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$item['message'] ?? 'Facebook'}}</p>

                    <button class="flex align-middle items-center text-teal-600 font-bold mt-4">
                        <span>Read more</span>
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


        @endforeach
    </div>
</section>