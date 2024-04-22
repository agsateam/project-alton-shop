<!-- drawer component -->
<div id="drawer-cart-filter" class="fixed top-0 right-0 z-40 flex flex-col h-screen overflow-y-auto transition-transform {{ $isHideDrawer ? 'translate-x-full' : 'transform-none' }} w-full sm:w-[500px] bg-white" tabindex="-1" aria-labelledby="drawer-cart-filter-label">
    {{-- header --}}
    <div class="py-3 px-6 shadow-lg">
        <div class="flex flex-row">
            <div class="flex flex-col grow">
                <h5 id="drawer-cart-filter-label" class="inline-flex items-center mb-1 font-semibold">Sidebar Filter</h5>
            </div>
            <button wire:click="hideDrawer" type="button" data-drawer-hide="drawer-cart-filter" aria-controls="drawer-cart-filter" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-black rounded-lg text-sm w-8 h-8 inline-flex items-center justify-center">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    </div>
    
    {{-- content --}}
    <div class="overflow-auto pt-3 px-3 pb-60 sm:pb-3 sm:mb-44">
        <ul class="space-y-2 font-medium">
            @forEach ($accordions as $index)
            <li>
               <button type="button" class="flex items-center w-full p-2 border-b border-black text-base text-black transition duration-75 group hover:bg-primary hover:text-white" aria-controls="dropdown-filter-{{ $index['no'] }}" data-collapse-toggle="dropdown-filter-{{ $index['no'] }}" aria-expanded="true">
                     <span class="flex-1 text-left">{{ $index['name'] }}</span>
                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                     </svg>
               </button>
               <ul id="dropdown-filter-{{ $index['no'] }}" class="py-2 space-y-2">
                @if ($index['no'] == 2)
                    <li class="grid gap-1 grid-cols-2 capitalize">
                        @foreach ($subCategories as $item)
                        {{-- @dump(request()->fullUrlIs(url('/'. $categoryName . '/' . $item))) --}}
                        <a href="/{{ $categoryName }}/{{ $item }}" class="{{ request()->getPathInfo() == '/'. $categoryName . '/' . $item ? 'bg-primary text-white' : 'text-black' }} p-2 items-center transition duration-75 group font-medium hover:bg-primary hover:text-white active:bg-primary active:text-white">{{ $item }}</a>
                        @endforeach
                    </li>
                @endif
               </ul>
            </li>
            @endforeach
            <li>
                <button type="button" class="flex items-center w-full p-2 border-b border-black text-base text-black transition duration-75 group hover:bg-primary hover:text-white" aria-controls="dropdown-filter-price" data-collapse-toggle="dropdown-filter-price" aria-expanded="true">
                    <span class="flex-1 text-left">Rentang Harga</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <ul id="dropdown-filter-price" class="py-2 space -y-2">
                    @livewire('category.filter', ['products' => $products])
            </li>
        </ul>
    </div>
</div>