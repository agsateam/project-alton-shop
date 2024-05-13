<?php 
$slug = explode("/", request()->getPathInfo());
?>

<x-landing-layout>
    <x-master.categoryLayout :products="$products" :categories="$categories">

        <span class="w-full left-0 fixed md:relative top-[60px] md:top-0 z-40 md:z-0 bg-white flex items-center px-5 md:px-0 pt-8 md:pt-0 pb-3 md:pb-0 mb-5">
            <div class="inline-flex flex-col grow mr-3">
              <span class="text-2xl lg:text-4xl">{{ $subCategoryName }}</span>
              <span class="-mt-1 md:-mt-0">
                <a class="opacity-60 text-xs hover:text-primary" href="/category/{{ $slug[2] }}">{{ $categoryName }}</a>
                <span class="text-xs">/</span>
                <a class="text-xs font-medium hover:text-primary" href="/category/{{ $slug[2] }}/{{ $slug[3] }}">{{ $subCategoryName }}</a>
              </span>
            </div>
            @if (count($products) != 0)
            <div class="block md:hidden">
                <!-- drawer filter -->
                <a wire:click class="flex items-center px-2 py-1 text-xs rounded-sm bg-primary text-white cursor-pointer" data-drawer-target="drawer-cart-filter" data-drawer-show="drawer-cart-filter" data-drawer-placement="right" aria-controls="drawer-cart-filter">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-3 h-3 mr-1">
                        <path d="M6.5 2.25a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0V4.5h6.75a.75.75 0 0 0 0-1.5H6.5v-.75ZM11 6.5a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0v-.75h2.25a.75.75 0 0 0 0-1.5H11V6.5ZM5.75 10a.75.75 0 0 1 .75.75v.75h6.75a.75.75 0 0 1 0 1.5H6.5v.75a.75.75 0 0 1-1.5 0v-3a.75.75 0 0 1 .75-.75ZM2.75 7.25H8.5v1.5H2.75a.75.75 0 0 1 0-1.5ZM4 3H2.75a.75.75 0 0 0 0 1.5H4V3ZM2.75 11.5H4V13H2.75a.75.75 0 0 1 0-1.5Z" />
                    </svg>                      
                    Filter
                </a>
            </div>
            @endif
        </span>

        <div class="mt-16 md:mt-0">
          @livewire('category.products', ['products' => $products])
        </div>

    </x-master.categoryLayout>
</x-landing-layout>