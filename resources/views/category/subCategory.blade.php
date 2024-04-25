<?php 
$slug = explode("/", request()->getPathInfo());
?>

<x-landing-layout>
    <x-master.categoryLayout :products="$products" :categories="$categories">

        <span class="flex flex-row">
            <h1 class="text-3xl lg:text-5xl mb-5">
                {{ $subCategoryName }}
                <div class="w-max text-left">
                    <nav aria-label="breadcrumb">
                      <ol class="flex w-full flex-wrap items-center rounded-md bg-blue-gray-50 bg-opacity-60 mt-2">
                        <li class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-primary">
                          <a class="opacity-60" href="/category/{{ $slug[2] }}">
                            <span>{{ $categoryName }}</span>
                          </a>
                          <span class="pointer-events-none mx-2 select-none font-sans text-sm font-normal leading-normal text-blue-gray-500 antialiased">/</span>
                        </li>
                        <li class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-primary">
                          <a
                            class="font-medium text-blue-gray-900 transition-colors hover:text-primary"
                            href="/category/{{ $slug[2] }}/{{ $slug[3] }}"
                          >
                            <span>{{ $subCategoryName }}</span>
                          </a>
                        </li>
                      </ol>
                    </nav>
                </div>
            </h1>
            <div class="w-full text-right mt-3 block md:hidden">
                <!-- drawer init and toggle -->
                <a wire:click class="px-4 py-2 rounded-sm bg-primary text-white cursor-pointer" data-drawer-target="drawer-cart-filter" data-drawer-show="drawer-cart-filter" data-drawer-placement="right" aria-controls="drawer-cart-filter">Filter</a>
            </div>
        </span>

        <x-category.products :products="$products"/>

    </x-master.categoryLayout>
</x-landing-layout>