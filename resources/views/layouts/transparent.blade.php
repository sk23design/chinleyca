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

        <div class="">
            @yield('content')
        </div>


        @include('includes.footer')
    </div>
    @include('components.mobile-menu')

    @livewireScripts
</body>

</html>
