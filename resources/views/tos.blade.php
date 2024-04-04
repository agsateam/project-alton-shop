<x-master.main/>
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
            <div class="basis-1/4 h-screen border-l-4 pl-4 rounded-md border-gray-400">
                <x-sidebar.button href="/privacy-policy" wire:navigate>Kebijakan Privasi</x-sidebar.button>
                <x-sidebar.button href="/tos" wire:navigate>Syarat dan Ketentuan</x-sidebar.button>
                <x-sidebar.button href="/panduan" wire:navigate>Panduan</x-sidebar.button>
                <x-sidebar.button href="/faq" wire:navigate>FAQ</x-sidebar.button>
            </div>
        </div>
    </main>
<x-master.footer/>