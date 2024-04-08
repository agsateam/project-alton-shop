<div id="drawer-cart" class="fixed top-0 right-0 z-40 flex flex-col h-screen overflow-y-auto transition-transform {{ $isHideDrawer ? 'translate-x-full' : 'transform-none' }} w-full sm:w-[500px] bg-white" tabindex="-1" aria-labelledby="drawer-cart-label">
    {{-- header --}}
    <div class="py-3 px-6 shadow-lg">
        <div class="flex flex-row">
            <div class="flex flex-col grow">
                <h5 id="drawer-cart-label" class="inline-flex items-center mb-1 font-semibold">Keranjang Belanja</h5>
                <span class="text-xs">{{ count($cart) }} Produk | {{ $totalQty }} Item</span>
            </div>
            <button wire:click="hideDrawer" type="button" data-drawer-hide="drawer-cart" aria-controls="drawer-cart" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex items-center justify-center">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    </div>
    
    {{-- content --}}
    <div class="flex-1 overflow-auto px-3 pt-3 pb-60 sm:pb-3 sm:mb-44">
        {{-- product list --}}
        @if (!$cart)
        <div class="w-full py-10 text-center text-gray-500">
            Keranjang anda masih kosong..
        </div>
        @endif
        @foreach ($cart as $item)
        <div class="flex flex-row px-6 py-3 hover:bg-gray-100">
            {{-- TODO: change real product link --}}
            <a href="/product/aaa" wire:navigate class="w-20 h-20">
                <img src="{{ $item['photo'] }}">
            </a>
            <div class="flex flex-col ml-3 w-full">
                {{-- TODO: change real product link --}}
                <a href="/product/aaa" wire:navigate class="text-sm mb-3">{{ $item['name'] }}</a>
                <div class="flex flex-row">
                    <div class="flex flex-col grow">
                        {{-- size --}}
                        <div class="text-xs flex flex-row">
                            <span class="mr-2">{{ $item['size'] }}</span> | <span class="ml-2 text-price">Stok : {{ $item['stock'] }}</span>
                        </div>
                        <span class="font-semibold text-xs">@toRupiah($item['price'])</span>
                    </div>
                    <div class="flex flex-row">
                        {{-- kuantitas --}}
                        <button wire:click="reduceQty('{{ $item['product_id'] . '-' . $item['size'] }}')" class="btn btn-sm text-sm font-medium px-3 rounded-none shadow-none">-</button>
                        <input type="text" value="{{ $item['qty'] }}" class="w-6 px-0 h-8 text-xs text-center border-none bg-gray-200" disabled>
                        <button wire:click="addQty('{{ $item['product_id'] . '-' . $item['size'] }}')" class="btn btn-sm text-sm font-medium px-3 rounded-none shadow-none">+</button>
            
                        {{-- hapus produk dari keranjang --}}
                        <button wire:click="removeItem('{{ $item['product_id'] . '-' . $item['size'] }}')" class="btn btn-sm bg-red-700 hover:bg-red-800 text-white rounded-none shadow-none ml-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                            </svg>              
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- order info --}}
    <div class="fixed bottom-0 right-0 w-full sm:w-[500px] h-44 px-6 py-4 border-t-2 bg-white">
        {{-- subtotal & total --}}
        <div class="flex flex-row">
            <span class="grow text-sm">Subtotal</span>
            <span class="text-sm">@toRupiah($subTotal)</span>
        </div>
        <div class="flex flex-row mt-1 font-medium">
            <span class="grow">Total</span>
            <span>@toRupiah($subTotal)</span>
        </div>
        
        <div class="mt-2">
            <button {{ !$cart && !$isFromCheckoutPage ? 'disabled' : '' }} wire:click="toCheckoutPage" class="btn btn-primary rounded-none w-full">
                {{ $isFromCheckoutPage ? 'Perbarui' : 'Checkout' }}
            </button>
            <button wire:click="continueShopping" class="btn btn-sm text-xs font-normal rounded-none w-full mt-2">
                Lanjut Belanja
            </button>
        </div>
    </div>
</div>