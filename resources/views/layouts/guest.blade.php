<?php 
use App\Models\WebConfig;
$theme = WebConfig::first()->theme;
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body data-theme="{{ $theme }}" class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white">
            <div class="text-center">
                <a href="/" wire:navigate>
                    <h1 class="text-5xl font-bold">ALTON</h1>
                    {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                </a>
                <h4 class="hidden text-2xl mt-2 font-normal" id="admin">Login Administrator</h4>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden">
                {{ $slot }}
            </div>
        </div>
    </body>
    <script>
        let admin = document.querySelector('#admin');
        if(window.location.pathname == "/admin"){
            admin.classList.remove("hidden");
        }
    </script>
</html>
