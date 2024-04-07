<?php 
$menu = ['Baby & Kids','Set','Atasan','Muslim','Aksesoris','Lainnya'];
?>

<div class="navbar flex py-0 bg-primary text-white shadow-lg">
  <div class="grow">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </div>
      {{-- navbar untuk responsif nanti --}}
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-white text-black rounded-box w-52">
        <li>
          <a>Baby & Kids</a>
          <ul class="p-2">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
          </ul>
        </li>
        <li>
          <a>Atasan</a>
          <ul class="p-2">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
          </ul>
        </li>
        <li>
          <a>Aksesoris</a>
          <ul class="p-2">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
          </ul>
        </li>
        <li><a>Lainnya</a></li>
      </ul>
      {{-- end --}}
    </div>
    <a href="/" wire:navigate class="font-bold text-xl lg:ml-5 sm:ml-3">ALTON</a>
    <div class="ml-5 hidden lg:flex">
      <ul class="menu menu-horizontal">
        @foreach ($menu as $item)
        <div class="dropdown dropdown-hover">
          <div tabindex="0" role="button" class="py-3 m-1 mx-3">{{ $item }}</div>
          <div tabindex="0" class="dropdown-content z-[1] card card-compact rounded-none w-96 shadow bg-white text-black">
            <div class="card-body">
              <div class="flex flex-wrap">
                <a href="#1" class="p-5 hover:font-bold" wire:navigate>SubMenu 1</a>
                <a href="#2" class="p-5 hover:font-bold" wire:navigate>SubMenu 2</a>
                <a href="#3" class="p-5 hover:font-bold" wire:navigate>SubMenu 3</a>
                <a href="#4" class="p-5 hover:font-bold" wire:navigate>SubMenu 4</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </ul>
    </div>
  </div>
  <div class="mr-3">
    <button class="btn btn-ghost btn-circle" data-modal-target="search_modal" data-modal-toggle="search_modal" >
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
    </button>
    @livewire('product.cart-button')
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
    <form method="post">
      <div class="flex flex-col sm:flex-row">
        <input type="search" name="product" class="h-14 text-sm rounded-none grow focus:ring-primary focus:border-primary p-2.5" placeholder="Cari produk ..." required>
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