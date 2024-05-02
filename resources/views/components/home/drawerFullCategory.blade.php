<div id="drawer-full-category" class="fixed top-0 right-0 z-40 h-screen overflow-y-auto transition-transform translate-x-full bg-white w-3/4 md:w-1/3 shadow-lg flex flex-col" tabindex="-1" aria-labelledby="drawer-full-category-label">
    {{-- header --}}
    <div class="py-3 px-5 bg-white mb-2 shadow-lg sticky top-0">
        <div class="flex flex-row items-center">
            @if (Illuminate\Support\Facades\Auth::check())
                <div class="flex flex-col grow">
                    <span class="text-sm font-semibold inline-flex items-center" href="/login" wire:navigate>{{ auth()->user()->name }}</span>
                    <a href="/dashboard" class="text-price text-xs underline mt-1 inline-flex items-center">Transaksi Saya</a>
                </div>
            @else
                <div class="flex flex-col grow">
                    <a class="text-sm font-semibold inline-flex items-center" href="/login" wire:navigate>
                        MASUK
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-1 w-3 h-3">
                            <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                        </svg>                      
                    </a>
                    <a href="/register" class="text-price text-xs underline mt-1 inline-flex items-center">Buat akun baru</a>
                </div>
            @endif
            <button type="button" data-drawer-hide="drawer-full-category" aria-controls="drawer-full-category" class="bg-transparent text-sm w-8 h-8 inline-flex items-center justify-center">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    </div>
    {{-- category --}}
    @foreach ($categories as $item)
        <div id="{{ $item['slug'] }}" data-accordion="collapse" data-active-classes="font-bold" data-inactive-classes="bg-white font-medium" class="w-full cursor-pointer">
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
</div>