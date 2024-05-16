<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin - Alton</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <style>
            * {
                font-family: "Poppins", sans-serif;
            }
        </style>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body data-theme="dark" class="antialiased font-sans">
        
        <main class="flex flex-row relative">
            <menu class="h-screen bg-primary text-white w-64 shadow-xl">
                <div class="w-full py-3 px-5">
                    <span class="text-4xl font-semibold">ALTON</span>
                </div>
                <x-admin.sidebar-menu/>
            </menu>
            <section class="w-full flex flex-col">
                <header class="sticky top-0 z-50">
                    <x-admin.navbar/>
                </header>
                <div class="w-full p-5">
                    {{ $slot }}
                </div>
            </section>
        </main>

        @livewireScripts
    </body>
</html>