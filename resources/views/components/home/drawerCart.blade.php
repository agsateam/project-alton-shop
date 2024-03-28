<div id="drawer-cart" class="fixed top-0 right-0 z-40 flex flex-col h-screen overflow-y-auto transition-transform translate-x-full w-full sm:w-[500px] bg-white" tabindex="-1" aria-labelledby="drawer-cart-label">
    {{-- header --}}
    <div class="py-3 px-6 shadow-lg">
        <div class="flex flex-row">
            <div class="flex flex-col grow">
                <h5 id="drawer-cart-label" class="inline-flex items-center mb-1 font-semibold">Keranjang Belanja</h5>
                <span class="text-xs">5 Barang</span>
            </div>
            <button type="button" data-drawer-hide="drawer-cart" aria-controls="drawer-cart" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex items-center justify-center">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    </div>
    
    {{-- content --}}
    <div class="flex-1 overflow-auto py-3">
        {{-- product list --}}
        @for ($i = 0; $i < 7; $i++)
        <div class="flex flex-row px-6 py-3 hover:bg-gray-100">
            <img src="https://im.uniqlo.com/global-cms/spa/resce30c3ead8d207f57351a37f597fae5efr.jpg" class="w-20 h-20">
            <div class="flex flex-col ml-3 w-full">
                <span class="text-sm mb-3">Nama Produk Lorem Ipsum Lorem Ipsum Lorem Ipsum</span>
                <div class="flex flex-row">
                    <div class="flex flex-col grow">
                        {{-- size --}}
                        <a href="#" class="flex flex-row">
                            <span class="text-xs mr-1">XL</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3">
                            <path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                            <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                            </svg>                            
                        </a>
                        <span class="font-semibold text-xs">Rp 100.000</span>
                    </div>
                    <div class="flex flex-row">
                        {{-- kuantitas --}}
                        <button class="btn btn-sm text-sm font-medium px-3 rounded-none shadow-none">-</button>
                        <input type="text" value="0" class="w-6 px-0 h-8 text-xs text-center border-none bg-gray-200">
                        <button class="btn btn-sm text-sm font-medium px-3 rounded-none shadow-none">+</button>
            
                        {{-- hapus produk dari keranjang --}}
                        <button class="btn btn-sm bg-red-700 hover:bg-red-800 text-white rounded-none shadow-none ml-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                            </svg>              
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>

    {{-- order info --}}
    <div class="px-6 py-4 border-t-2">
        {{-- subtotal & total --}}
        <div class="flex flex-row">
            <span class="grow text-sm">Subtotal</span>
            <span class="text-sm">Rp 100.000</span>
        </div>
        <div class="flex flex-row mt-1 font-medium">
            <span class="grow">Total</span>
            <span>Rp 100.000</span>
        </div>
        
        <div class="mt-2">
            <button class="btn btn-primary rounded-none w-full">
                Checkout
            </button>
            <button class="btn btn-sm text-xs font-normal rounded-none w-full mt-2">
                Lanjut Belanja
            </button>
        </div>
    </div>
</div>