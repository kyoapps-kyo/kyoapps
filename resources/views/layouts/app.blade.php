<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body class="font-sans antialiased">

    <div class="bg-base-200 flex w-full">
        <div class="flex flex-col min-h-screen 2xl:w-1/3 w-1/4">
            <div class="h-40 px-4 sm:px-6 lg:px-8 flex items-center justify-end">
                <div class="w-60">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo />
                    </a>
                </div>
            </div>
            <aside class="grow">
                {{$aside}}
            </aside>
            <div class="bg-neutral h-14 opacity-80">
                <footer class="footer place-items-end items-center p-4 h-full bg-neutral text-neutral-content">
                    <div class="items-center grid-flow-col">
                        <p>Copyright © 2022 - All right reserved </p>
                    </div>
                </footer>
            </div>
        </div>
        <div class=" grow flex flex-col min-h-screen bg-base-300">
            @include('layouts.navigation')
            <main class="grow">
                {{$slot}}
            </main>
            @include('layouts.footer')
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    @if(isset($myScript))
        {{ $myScript }}
    @endif
</body>

</html>
