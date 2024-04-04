<x-landing-layout>

    <div class="flex flex-row p-10">
        <div class="basis-3/4">
            <h1 class="text-5xl">Panduan Belanja</h1>
            <div class="relative flex pt-4 items-center w-3/4">
                <div class="flex-grow border-2 border-gray-400"></div>
            </div>
        </div>
        <div class="basis-1/4 h-screen border-l-4 pl-4 border-gray-400">
            <x-sidebar.button href="/privacy-policy" wire:navigate>Kebijakan Privasi</x-sidebar.button>
            <x-sidebar.button href="/tos" wire:navigate>Syarat dan Ketentuan</x-sidebar.button>
            <x-sidebar.button href="/panduan" wire:navigate>Panduan</x-sidebar.button>
            <x-sidebar.button href="/faq" wire:navigate>FAQ</x-sidebar.button>
        </div>
    </div>
    
</x-landing-layout>