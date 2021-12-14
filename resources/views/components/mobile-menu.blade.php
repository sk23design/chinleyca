{{-- Mobile Nav --}}
<div class="lg:hidden">
    <div class="fixed top-0 left-0 w-full bg-gray-800 z-50 bg-opacity-80" x-show.transition="show"
        @click.away="show = false" x-cloak>
        <nav>
            <ul class=" text-2xl font-bold p-10 text-center">
                <li><a class="{{ (request()->is('/')) ? 'text-white' : 'text-gray-300' }} p-2 block" href="/">Home</a>
                </li>
                <li><a class="{{ (request()->is('events')) ? 'text-white' : 'text-gray-300' }} p-2 block"
                        href="/events">Calendar</a></li>
                <li><a class="{{ (request()->is('staff')) ? 'text-white' : 'text-gray-300' }} p-2 block"
                        href="/staff">Staff</a></li>
                <li><a class="{{ (request()->is('information')) ? 'text-white' : 'text-gray-300' }} p-2 block"
                        href="/information">Information</a></li>
                <li><a class="{{ (request()->is('letters')) ? 'text-white' : 'text-gray-300' }} p-2 block"
                        href="/letters">Letters</a></li>
                <li><a class="{{ (request()->is('contact')) ? 'text-white' : 'text-gray-300' }} p-2 block"
                        href="/contact">Contact</a></li>
                <li><a class="{{ (request()->is('class*')) ? 'text-white' : 'text-gray-300' }} p-2 block"
                        href="/classes">Classes</a></li>
                <li><a class="{{ (request()->is('nursery')) ? 'text-white' : 'text-gray-300' }} p-2 block"
                        href="/nursery">Nursery</a></li>

            </ul>
        </nav>
        <div>
            <button @click="show = false" class="top-8 right-12 absolute text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
</div>