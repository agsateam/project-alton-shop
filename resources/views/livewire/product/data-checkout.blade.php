<div class="p-5 flex flex-col">
    <span class="text-2xl font-bold">{{ $product['name'] }}</span>
    <span class="text-2xl">
        @toRupiah($product['price'])
    </span>
    {{-- TODO: Size Data Dynamic --}}
    <div class="mt-5 flex flex-col">
        <span class="text-md">Size : {{ $size }}</span>
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
            <input type="text" value="{{ $quantity }}" class="w-12 h-10 text-xs text-center border-x-0 border-primary">
            <button wire:click="incrementQty" class="btn bg-white btn-sm w-10 h-10 font-medium rounded-none border-x-0 border-r border-primary">+</button>
        </div>
    </div>
    <div class="mt-5">
        <button @if ($quantity == 0) disabled @endif wire:click="addToCart" class="btn btn-md w-full rounded-none bg-primary hover:bg-secondary px-16 text-white">ADD TO CART</button>
    </div>
</div>