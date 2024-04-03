<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alton Shop</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <style>
            * {
                /* font-family: "Montserrat", sans-serif; */
                font-family: "Poppins", sans-serif;
            }
        </style>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body data-theme="{{ $theme }}" class="antialiased font-sans">
        <header class="sticky top-0 z-50">
            <x-home.navbar/>
        </header>

        <main class="realtive row">
        <div class="flex flex-row p-10">
            <div class="basis-3/4">
                <h1 class="text-5xl">Syarat Dan Ketentuan</h1>
                <div class="relative flex pt-4 items-center w-3/4">
                    <div class="flex-grow border-2 border-gray-400"></div>
                </div>
                <p class="text-balance">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum molestias architecto, magni voluptatum pariatur nobis laudantium soluta! Eius, consectetur iure possimus accusantium et, enim, error totam officiis quia odio ipsa.</p>
            </div>
            <div class="basis-1/4 h-screen border-l-4 pl-4 border-gray-400">
                {{-- @dump(request()->fullUrlIs(url('/panduan'))) --}}
                <x-sidebar.button href="/privacy-policy">Kebijakan Privasi</x-sidebar.button>
                <x-sidebar.button href="/tos">Syarat dan Ketentuan</x-sidebar.button>
                <x-sidebar.button href="/sidebar">sidebar</x-sidebar.button>
                <x-sidebar.button href="/FAQ">FAQ</x-sidebar.button>
            </div>
        </div>
        </main>
        
        <footer></footer>

        @livewireScripts
        
    </body>
</html>
