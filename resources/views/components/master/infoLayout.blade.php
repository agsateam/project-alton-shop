<div class="flex flex-col md:flex-row p-5 md:p-10 mt-5">
    <div class="md:w-[75%] grow">
        
        {{ $slot }}

    </div>
    <div class="mt-8 md:mt-0 w-full md:w-1/4 md:h-screen md:border-l-4 md:pl-4 md:border-gray-400">
        <x-sidebar.button href="/panduan" wire:navigate>Panduan</x-sidebar.button>
        <x-sidebar.button href="/privacy-policy" wire:navigate>Kebijakan Privasi</x-sidebar.button>
        <x-sidebar.button href="/tos" wire:navigate>Syarat dan Ketentuan</x-sidebar.button>
        <x-sidebar.button href="/about" wire:navigate>Tentang Kami</x-sidebar.button>
        <x-sidebar.button href="/faq" wire:navigate>FAQ</x-sidebar.button>
    </div>
</div>