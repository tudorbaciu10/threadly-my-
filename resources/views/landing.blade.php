<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Threadly') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    </head>
    <body class="antialiased bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100 font-sans">
        <div class="relative min-h-screen flex flex-col justify-center overflow-hidden">
            <div class="absolute inset-0 bg-[url(/img/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div>
            
            @include('landing.partials.header')

            @include('landing.partials.main')

            @include('landing.partials.business-section')

            @include('landing.partials.footer')
        </div>
    </body>
</html>
