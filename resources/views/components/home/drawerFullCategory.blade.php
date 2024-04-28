<div id="drawer-full-category" class="fixed top-0 left-0 z-40 h-screen overflow-y-auto transition-transform -translate-x-full bg-white w-3/4 md:w-1/4 shadow-lg flex flex-col" tabindex="-1" aria-labelledby="drawer-full-category-label">
    {{-- header --}}
    <div class="py-3 px-5 bg-primary text-white">
        <div class="flex flex-row items-center">
            <h5 id="drawer-full-category-label" class="grow inline-flex items-center font-semibold">KATEGORI</h5>
            <button type="button" data-drawer-hide="drawer-full-category" aria-controls="drawer-full-category" class="text-white bg-transparent text-sm w-8 h-8 inline-flex items-center justify-center">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    </div>
    {{-- category --}}
    @foreach ($categories as $item)
        <div id="{{ $item['slug'] }}" data-accordion="collapse" data-active-classes="bg-gray-200 font-bold" data-inactive-classes="bg-white font-medium" class="w-full cursor-pointer">
            <a class="w-full inline-flex justify-between items-center border-b border-gray-200 font-medium py-3 px-5 bg-white" data-accordion-target="#content-{{ $item['slug'] }}" aria-controls="content-{{ $item['slug'] }}">
                <span class="uppercase">{{ $item['categoryName'] }}</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
            </a>
            <div id="content-{{ $item['slug'] }}" class="hidden w-full border-b-2 border-gray-200" aria-labelledby="{{ $item['slug'] }}">
                <div class="flex flex-col">
                    @foreach ($item->subCategory()->get() as $sub)
                        <a href="/category/{{ $item['slug'] }}/{{ $sub['slug'] }}" wire:navigate class="py-3 px-5 text-sm font-light hover:font-semibold cursor-pointer uppercase border-b border-gray-200">{{ $sub['subName'] }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
    {{-- account --}}
    <div class="grow mb-5 place-content-end flex flex-col">
        @if (Illuminate\Support\Facades\Auth::check())
            <a href="/dashboard" wire:navigate class="flex flex-row items-center py-3 px-5 border-b border-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
                <span id="drawer-full-category-label" class="font-semibold">My Transaction</span>
            </a>
            <a href="/profile" wire:navigate class="flex flex-row items-center py-3 px-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <span id="drawer-full-category-label" class="font-semibold">Profile</span>
            </a>
        @else
            <a href="/login" wire:navigate class="flex flex-row items-center py-3 px-5 border-b border-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                </svg>              
                <span id="drawer-full-category-label" class="font-semibold">Login</span>
            </a>
            <a href="/register" wire:navigate class="flex flex-row items-center py-3 px-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                </svg>                                   
                <span id="drawer-full-category-label" class="font-semibold">Register</span>
            </a>
        @endif
    </div>
</div>