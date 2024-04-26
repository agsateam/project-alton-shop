<div class="p-2 capitalize">
    <div class="mb-2">
        <!-- component -->
        <div class="flex items-center ps-4 hover:bg-primary hover:text-white">
            <input id="filter_terbaru" onclick="checkTerbaru(event.target)" wire:click="check_terbaru" @if($filter_terbaru) checked @endif type="checkbox" class="w-4 h-4 focus:ring-primary focus:ring-2 text-primary">
            <label for="filter_terbaru" class="w-full py-3 ms-2 text-sm font-medium cursor-pointer">Terbaru</label>
        </div>
        <div class="flex items-center ps-4 hover:bg-primary hover:text-white">
            <input id="filter_terlaris" wire:click="check_rating" type="checkbox" class="w-4 h-4 focus:ring-primary focus:ring-2 text-primary">
            <label for="filter_terlaris" class="w-full py-3 ms-2 text-sm font-medium cursor-pointer">Rating tertinggi</label>
        </div>
    </div>
    <p class="mb-2 text-black flex flex-row">
        <input type="number" id="h-min" wire:change="harga_min(event.target.value)" value="0" class="rounded-none border-black w-1/2"/>
        <span class="px-2 place-self-center">-</span>
        <input type="number" id="h-max" wire:change="harga_max(event.target.value)" value="0" class="rounded-none border-black w-1/2"/>
    </p>
    <p class="mb-2 text-xs ps-2">
        Berdasarkan harga :<br/>
        <span class="flex flex-wrap">
            <span class="text-price" id="h-min-show">@toRupiah($filter_harga_min)</span>
            <span class="{{ $filter_harga_max == 0 ? 'hidden' : 'block' }} px-1">-</span>
            <span class="text-price {{ $filter_harga_max == 0 ? 'hidden' : 'block' }}" id="h-max-show">@toRupiah($filter_harga_max)</span>
        </span>
    </p>
    <div class="{{ $rentang_harga_salah ? 'block' : 'hidden' }} w-full text-xs font-semibold text-center text-red-600 mb-5">Rentang harga tidak sesuai, periksa kembali!</div>
</div>

<script>
    // Category Filter Terbaru
    function checkTerbaru(thisDocument){
        document.querySelectorAll("#filter_terbaru").forEach(element => {
            element.checked = thisDocument.checked;
        });
    };

    // Category Filter Harga
    // function formatRupiah(thisDocument, id){
    //     document.querySelectorAll("#" + id).forEach(element => {
    //         element.innerHTML = 'Rp ' + toRupiah(thisDocument.value);
    //     });
    // };

    // function toRupiah(angka){
    //     var number_string   = angka.replace(/[^,\d]/g, '').toString(),
    //     split               = number_string.split(','),
    //     sisa                = split[0].length % 3,
    //     rupiah              = split[0].substr(0, sisa),
    //     ribuan              = split[0].substr(sisa).match(/\d{3}/gi);
        
    //     if (ribuan) {
    //         separator = sisa ? '.' : '';
    //         rupiah += separator + ribuan.join('.');
    //     }

    //     rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    //     return rupiah;
    // }
</script>