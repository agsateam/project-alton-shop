<?php 
$categories = App\Models\Category::limit(5)->get();
$allCategories = App\Models\Category::all();
?>

<div class="navbar flex py-0 bg-primary text-white shadow-lg">
  <div class="grow">
    {{-- button full category for mobile --}}
    <div tabindex="0" role="button" class="btn btn-ghost md:hidden" data-drawer-target="drawer-full-category" data-drawer-show="drawer-full-category" data-drawer-placement="left" aria-controls="drawer-full-category">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
    </div>
    {{-- logo/title --}}
    <a href="/" wire:navigate class="font-bold text-xl lg:ml-5 sm:ml-3">ALTON</a>
    {{-- category --}}
    <div class="ml-5 hidden md:flex">
      <div class="menu menu-horizontal p-0 m-0">
        @foreach ($categories as $item)
        <div class="dropdown dropdown-hover px-3 h-full place-content-center">
          <a href="/category/{{ $item['slug'] }}" wire:navigate role="button" class="group py-5 transition-all duration-300 ease-in-out">
            <span class="pb-1 bg-left-bottom bg-gradient-to-r from-white to-white bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out">
              {{ $item['categoryName'] }}
            </span>
          </a>
          <div tabindex="0" class="dropdown-content z-[1] mt-4 card card-compact rounded-none w-96 shadow bg-white text-black">
            <div class="card-body">
              <div class="grid grid-cols-3">
                @foreach ($item->subCategory()->get() as $sub)
                <a href="/category/{{ $item['slug'] }}/{{ $sub['slug'] }}" wire:navigate class="py-2 mr-3 hover:font-bold">{{ $sub['subName'] }}</a>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <a class="px-3 group py-5 transition-all duration-300 ease-in-out" role="button" data-drawer-target="drawer-full-category" data-drawer-show="drawer-full-category" data-drawer-placement="left" aria-controls="drawer-full-category">
          <span class="pb-1 bg-left-bottom bg-gradient-to-r from-white to-white bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out">
            Lainnya
          </span>
        </a>
      </div>
    </div>
  </div>
  {{-- right action button --}}
  <div class="mr-3">
    {{-- search --}}
    <button class="btn btn-ghost btn-circle" data-modal-target="search_modal" data-modal-toggle="search_modal" >
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
    </button>
    {{-- cart --}}
    @livewire('product.cart-button')
    {{-- account --}}
    <a class="btn btn-ghost btn-circle" href="/login" wire:navigate>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
      </svg>
    </a>
  </div>
</div>


<!-- Search modal -->
<div id="search_modal" tabindex="-1" aria-hidden="true" class="hidden fixed w-full h-[calc(100%-1rem)] max-h-full">
  <div class="absolute top-10 px-4 sm:px-2 w-full max-w-md">
    <form method="get" action="/search">
      <div class="flex flex-col sm:flex-row">
        <input type="search" name="keyword" class="h-14 text-sm rounded-none grow focus:ring-primary focus:border-primary p-2.5" placeholder="Cari produk ..." required>
        <button type="submit" class="hidden sm:block btn btn-primary rounded-none h-14">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
          </svg>            
        </button>
      </div>
    </form>
  </div>
</div> 

{{-- Cart Drawer --}}
@livewire('product.cart')

{{-- Full Category Drawer --}}
<x-home.drawerFullCategory :categories="$allCategories"/>