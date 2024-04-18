<div class="p-5 flex flex-col">
    <span class="text-2xl font-bold">{{ $product['name'] }}</span>
    <span class="text-2xl">
        @toRupiah($product['price'])
    </span>
    <div class="mt-5 flex flex-col">
        <div class="mb-1">
            <span class="text-md">Size : <span class="font-semibold">{{ $size }}</span></span>
            {{-- show stock info if <= 10 --}}
            @if ($product['stock'][$size] <= 10)
                @if ($product['stock'][$size] == 0)
                <span class="text-sm text-price ml-5 font-bold">Stok Habis</span></span>
                @else
                <span class="text-sm text-price ml-5">Stok Tersisa <span class="font-semibold">{{ $product['stock'][$size] }}</span></span>
                @endif
            @endif
        </div>
        <div class="flex flex-row">
            @foreach ($product['sizes'] as $s)
                <button wire:click="changeSize('{{ $s }}')" class="btn {{ $size == $s ? 'bg-primary text-white' : 'bg-white' }} btn-sm w-10 h-10 mr-1 font-normal rounded-none border border-primary">{{ $s }}</button>
            @endforeach
        </div>
    </div>
    <div class="mt-5 flex flex-col">
        <span class="text-md">Quantity :</span>
        <div class="flex flex-row">
            <button wire:click="decrementQty" class="btn bg-white btn-sm w-10 h-10 font-medium rounded-none border-x-0 border-l border-primary">-</button>
            <input type="text" disabled value={{ $product['stock'][$size] == 0 ? 0 : $quantity }} class="w-12 h-10 text-xs text-center border-x-0 border-primary">
            <button @if($product['stock'][$size] > 0) wire:click="incrementQty('{{ $product['stock'][$size] }}')" @endif class="btn bg-white btn-sm w-10 h-10 font-medium rounded-none border-x-0 border-r border-primary">+</button>
        </div>
    </div>
    <div class="mt-5">
        <button @if ($quantity == 0 || $product['stock'][$size] == 0) disabled @endif
                wire:click="addToCart"
                class="{{ $showAlert ? 'hidden' : 'block' }} btn btn-md w-full rounded-none bg-primary hover:bg-secondary px-16 text-white"
        >
            ADD TO CART
        </button>
        <div class="{{ $showAlert ? 'block' : 'hidden' }} w-full bg-gray-500 flex items-center p-3 text-white">
            <span class="text-xs grow">Stok sudah habis untuk keranjang anda</span>
            <button wire:click="closeAlert">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>                  
            </button>
        </div>
    </div>
</div>