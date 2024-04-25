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
    <p class="mb-2 text-black flex flex-row">
        <input type="number" id="h-min" name="h-min" onchange="formatRupiah(event.target, 'h-min-show')" class="rounded-none border-black w-1/2"/>
        <span class="px-2 place-self-center">-</span>
        <input type="number" id="h-max" name="h-max" onchange="formatRupiah(event.target, 'h-max-show')" class="rounded-none border-black w-1/2"/>
    </p>
    <p class="mb-2 text-xs ps-2">
        Menampilkan harga dari :<br/><span class="text-price" id="h-min-show">Rp. 0</span> - <span class="text-price" id="h-max-show">Rp. 0</span>
    </p>
</div>

<script>
    // Category Filter Harga
    function formatRupiah(thisDocument, id){
        document.getElementById(id).innerHTML = 'Rp ' + toRupiah(thisDocument.value);
    };

    function toRupiah(angka){
        var number_string   = angka.replace(/[^,\d]/g, '').toString(),
        split               = number_string.split(','),
        sisa                = split[0].length % 3,
        rupiah              = split[0].substr(0, sisa),
        ribuan              = split[0].substr(sisa).match(/\d{3}/gi);
        
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
    }
</script>