<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('storage/images/layout/favicon.png') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    @yield('head_scripts')
</head>

<body class="antialiased" x-data="{show:false,search:false}">

    <header class="fixed top-0 z-20 w-full bg-white shadow-lg h-20 md:h-24">
        <div class="flex justify-between items-center max-w-7xl mx-auto px-4 lg:px-8">
            <div class="w-20 md:w-24 py-2">
                <a href="/">
                    @include('includes.logo')
                </a>
            </div>

            <div class="hidden lg:block">
                <nav>
                    <ul class="flex items-center align-middle font-bold gap-1">

                        <li><a class="{{ request()->is('venues') ? 'text-pink-500 ' : '' }} px-4 py-2 hover:text-pink-400 hover:bg-gray-100 rounded-full"
                                href="/venues">Venues For Hire</a></li>
                        <li><a class="{{ request()->is('activities') ? 'text-pink-500 ' : '' }} px-4 py-2 hover:text-pink-400 hover:bg-gray-100 rounded-full"
                                href="/activities">Activities, Groups and Events</a></li>

                        <li><a class="{{ request()->is('information') ? 'text-pink-500 ' : '' }} px-4 py-2 hover:text-pink-400 hover:bg-gray-100 rounded-full"
                                href="/information">Information</a></li>


                        <li><a class="{{ request()->is('about-us') ? 'text-pink-500 ' : '' }} px-4
                            py-2 hover:text-pink-400 hover:bg-gray-100 rounded-full" href="/about-us">About Us</a></li>

                        <li><a class="{{ request()->is('contact') ? 'text-pink-500 ' : '' }} px-4
                            py-2 hover:text-pink-400 hover:bg-gray-100 rounded-full" href="/contact">Contact</a></li>
                        <li class=" px-4 py-2">
                            <button @click="search = ! search">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </li>


                    </ul>
                </nav>
            </div>
            <div class="lg:hidden">
                <nav>
                    <ul class="flex items-center align-middle font-bold gap-4">
                        <li class="flex"><a @click="show = ! show" class="" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg></a></li>
                        <li class="flex">
                            <button @click="search = ! search">

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>


                            </button>
                        </li>
                    </ul>
                </nav>

                {{-- mobile trigger --}}

            </div>


        </div>
    </header>

    <div class="mt-24 lg:mt-24">
        @yield('content')
    </div>


    @include('includes.footer')

    @include('components.mobile-menu')
    @livewire('search')
    @livewireScripts
</body>

</html>