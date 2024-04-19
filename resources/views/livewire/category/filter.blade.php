<div class="p-2 capitalize">
    <div class="mb-2">
        <!-- component -->
        <div class="flex items-center ps-4 hover:bg-primary hover:text-white">
            <input id="bordered-checkbox-1" wire:click="check_terbaru" type="checkbox" name="bordered-checkbox" class="w-4 h-4 focus:ring-primary focus:ring-2 text-primary">
            <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm font-medium cursor-pointer">Terbaru</label>
        </div>
        <div class="flex items-center ps-4 hover:bg-primary hover:text-white">
            <input id="bordered-checkbox-2" wire:click="check_terlaris" type="checkbox" name="bordered-checkbox" class="w-4 h-4 focus:ring-primary focus:ring-2 text-primary">
            <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm font-medium cursor-pointer">Terlaris</label>
        </div>
    </div>
    <p class="mb-2 text-black grid gap-2 grid-cols-7">
        <input type="text" id="h-min" name="h-min" id="h-minimum" class="input rounded-none border-black input-primary col-span-3">
        <span class="text-center place-self-center">-</span>
        <input type="text" id="h-max" name="h-max" id="h-maximum" class="input rounded-none border-black input-primary col-span-3">
    </p>
    <p class="mb-2 text-xs ps-2">
        Menampilkan harga dari <span class="text-price">Rp. 0</span> - <span class="text-price">Rp. 0</span>
    </p>
</div>