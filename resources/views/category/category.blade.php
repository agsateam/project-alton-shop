<x-landing-layout>
    <x-master.categoryLayout :products="$products" :categories="$categories">

        <span class="flex flex-row">
            <h1 class="text-3xl lg:text-5xl mb-5">
                {{ $categoryName }}
            </h1>
            <div class="w-full text-right mt-3 block md:hidden">
                <!-- drawer init and toggle -->
                <a wire:click class="px-4 py-2 rounded-sm bg-primary text-white cursor-pointer" data-drawer-target="drawer-cart-filter" data-drawer-show="drawer-cart-filter" data-drawer-placement="right" aria-controls="drawer-cart-filter">Filter</a>
            </div>
        </span>

        @livewire('category.products', ['products' => $products])
        
    </x-master.categoryLayout>
</x-landing-layout>