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

<body class="antialiased" x-data="{show:false}">
    <div class="w-full">
        <header class="fixed top-0 z-50 w-full bg-white shadow-lg h-20 md:h-24">
            <div class="flex justify-between items-center max-w-7xl mx-auto px-2 lg:px-8">
                <div class="w-20 md:w-24 py-2">
                    <a href="/">
                        @include('includes.logo')
                    </a>
                </div>

                <div class="hidden lg:block">
                    <nav>
                        <ul class="flex items-center font-bold gap-1">

                            <li><a class="{{ request()->is('venues') ? 'text-blue-500 ' : '' }} px-4 py-2 hover:text-blue-400 hover:bg-gray-100 rounded-full"
                                    href="/venues">Venues</a></li>
                            <li><a class="{{ request()->is('events') ? 'text-blue-500 ' : '' }} px-4 py-2 hover:text-blue-400 hover:bg-gray-100 rounded-full"
                                    href="/events">Events</a></li>

                            <li><a class="{{ request()->is('information') ? 'text-blue-500 ' : '' }} px-4 py-2 hover:text-blue-400 hover:bg-gray-100 rounded-full"
                                    href="/information">Information</a></li>

                            <li><a class="{{ request()->is('contact') ? 'text-blue-500 ' : '' }} px-4
                            py-2 hover:text-blue-400 hover:bg-gray-100 rounded-full" href="/contact">Contact</a></li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </li>


                        </ul>
                    </nav>
                </div>
                <div class="lg:hidden">
                    <nav>
                        <ul class="flex items-center font-bold">
                            <li class="flex"><a @click="show = ! show" class="" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                    </svg></a></li>
                            <li><a class="px-4 py-2" href="#">
                                    <svg xmlns=" http://www.w3.org/2000/svg" class="h-6 w-6 ml-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>

                                </a></li>
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
    </div>
    @include('components.mobile-menu')

    @livewireScripts
</body>

</html>