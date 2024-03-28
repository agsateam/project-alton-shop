<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alton Shop</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body data-theme="{{ $theme }}" class="antialiased font-sans">
        <header class="sticky top-0 z-50">
            <x-home.navbar/>
        </header>

        <main class="relative">
            <x-home.slider/>

            <x-home.promoSection/>
    
            {{-- Promo --}}
            <div class="hero min-h-screen bg-base-200">
                <div class="hero-content text-center">
                  <div class="max-w-md">
                    <h1 class="text-5xl font-bold">Hello there</h1>
                    <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <button class="btn btn-primary">Get Started</button>
                  </div>
                </div>
            </div>
        </main>
        
        <footer></footer>

        @livewireScripts
        
    </body>
</html>
