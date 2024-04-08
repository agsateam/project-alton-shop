<x-landing-layout page="checkout">

    <div class="w-full bg-primary text-white flex justify-between items-center py-3 px-5 md:px-16">
        
        <a href="/" wire:navigate>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
            </svg>              
        </a>
        <span class="font-medium">CHECKOUT</span>
        @livewire('product.cart-button')
    
    </div>

    <div class="w-full flex flex-col md:flex-row p-5 md:px-10 md:py-0">
        <div class="w-full">
            @persist('checkout_items')
            {{-- Contact --}}
            <div class="md:pt-10 pb-10 w-full md:w-4/5">
                <div class="text-2xl font-bold mb-3">Kontak</div>
                <input type="email" placeholder="Email" name="email" class="w-full mb-2 rounded-sm border-[#B7B7B7]">
                <input type="text" placeholder="Nomor Telepon" name="phone" class="w-full rounded-sm border-[#B7B7B7]">
            </div>
            
            {{-- Address --}}
            <div class="pb-10 w-full md:w-4/5">
                <div class="text-2xl font-bold mb-3">Informasi Pengiriman</div>
                <input type="text" placeholder="Nama Lengkap Penerima" name="customer_name" class="w-full mb-2 rounded-sm border-[#B7B7B7]">
                <div class="flex flex-col md:flex-row">
                    <select name="province" class="w-full md:w-1/2 mb-2 rounded-sm border-[#B7B7B7]">
                        <option selected disabled>Provinsi</option>
                        <option>Jawa Barat</option>
                        <option>Jawa Tengah</option>
                        <option>Jawa Timur</option>
                    </select>
                    <select name="city" class="w-full md:w-1/2 md:ml-2 mb-2 rounded-sm border-[#B7B7B7]">
                        <option selected disabled>Kota</option>
                        <option>Pekalongan</option>
                        <option>Batang</option>
                        <option>Tegal</option>
                    </select>
                </div>
                <div class="flex flex-col md:flex-row">
                    <select name="district" class="w-full md:w-1/2 mb-2 rounded-sm border-[#B7B7B7]">
                        <option selected disabled>Kecamatan</option>
                        <option>Wiradesa</option>
                        <option>Tirto</option>
                        <option>Buaran</option>
                        <option>Kedungwuni</option>
                    </select>
                    <input type="text" placeholder="Kode POS" name="postal_code" class="w-full md:w-1/2 md:ml-2 mb-2 rounded-sm border-[#B7B7B7]">
                </div>
                <textarea placeholder="Alamat Lengkap" name="customer_address" class="w-full rounded-sm border-[#B7B7B7]"></textarea>
            </div>
            
            {{-- Ongkir --}}
            <div class="pb-10 w-full md:w-4/5">
                <div class="flex flex-row justify-between">
                    <div class="text-2xl font-bold mb-3">Pengiriman</div>
                    {{-- TODO: implement real ongkir by API --}}
                    <button onclick="cekOngkir()" class="btn btn-sm bg-primary hover:bg-secondary rounded-sm text-white mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 0 1-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004ZM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 0 1-.921.42Z" />
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v.816a3.836 3.836 0 0 0-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 0 1-.921-.421l-.879-.66a.75.75 0 0 0-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 0 0 1.5 0v-.81a4.124 4.124 0 0 0 1.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 0 0-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 0 0 .933-1.175l-.415-.33a3.836 3.836 0 0 0-1.719-.755V6Z" clip-rule="evenodd" />
                        </svg>                          
                        Cek Ongkir
                    </button>
                </div>
                <div class="flex flex-wrap">
                    <button class="w-[47%] lg:w-[48%] h-28 mb-2 mr-2 btn bg-white rounded-sm border-[#B7B7B7] inline-flex items-center justify-center">
                        <img class="w-1/2" src="https://storage.googleapis.com/kaj-prd-core-web/public/home-v3/logistics/jnt.png">
                        <span id="ongkos-kirim"></span>
                    </button>
                    <button class="w-[47%] lg:w-[48%] h-28 mb-2 mr-2 btn bg-white rounded-sm border-[#B7B7B7] inline-flex items-center justify-center">
                        <img class="w-1/2" src="https://storage.googleapis.com/kaj-prd-core-web/public/home-v3/logistics/sicepat.png">
                        <span id="ongkos-kirim"></span>
                    </button>
                    <button class="w-[47%] lg:w-[48%] h-28 mb-2 mr-2 btn bg-white rounded-sm border-[#B7B7B7] inline-flex items-center justify-center">
                        <img class="w-1/2" src="https://storage.googleapis.com/kaj-prd-core-web/public/home-v3/logistics/anteraja.png">
                        <span id="ongkos-kirim"></span>
                    </button>
                    <button class="w-[47%] lg:w-[48%] h-28 mb-2 mr-2 btn bg-white rounded-sm border-[#B7B7B7] inline-flex items-center justify-center">
                        <img class="w-1/2" src="https://storage.googleapis.com/kaj-prd-core-web/public/home-v3/logistics/ninja.png">
                        <span id="ongkos-kirim"></span>
                    </button>
                </div>
            </div>
            @endpersist

            {{-- Items --}}
            <div class="pb-10 w-4/5">
                <div class="text-2xl font-bold mb-3">Items</div>
                @foreach ($cart as $item)
                <div class="flex flex-row py-3">
                    <img src="{{ $item['photo'] }}" class="w-16 h-16">
                    <div class="flex flex-col ml-3 w-full">
                        <span class="text-sm mb-3">{{ $item['name'] }}</span>
                        <div class="flex flex-row">
                            <div class="flex flex-col grow">
                                <span class="text-xs mr-2">Size {{ $item['size'] }}</span>
                                <div class="text-xs flex flex-row">
                                    <span class="mr-2">@toRupiah($item['price'])</span> x <span class="ml-2 mr-2">{{ $item['qty'] }}</span> =
                                    <span class="ml-2 font-bold">@toRupiah($item['price'] * $item['qty'])</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="w-full md:w-3/5 md:pr-10">
            <div class="block md:sticky md:top-0 md:pt-10">
                <div class="text-2xl font-bold mb-10">Ringkasan</div>
                <div class="flex py-1">
                    <span class="grow">Subtotal</span>
                    <span>@toRupiah($subTotal)</span>
                </div>
                {{-- TODO: real ongkir --}}
                <div class="flex py-1">
                    <span class="grow">Ongkos Kirim</span>
                    <span>Rp 16.000</span>
                </div>
                <div class="flex py-1 font-bold">
                    <span class="grow">Total</span>
                    <span>@toRupiah($subTotal + 16000)</span>
                </div>
                <button {{ $subTotal == 0 ? 'disabled' : '' }} class="btn btn-primary w-full text-white rounded-sm mt-5">
                    <span>Checkout</span>
                </button>
            </div>
        </div>
    </div>

    @livewire('product.cart', ['isFromCheckoutPage' => true])

    <script>
        function cekOngkir(){
            ongkir = document.querySelectorAll("#ongkos-kirim");
            ongkir.forEach(element => {
                element.innerHTML = 'Rp 16.000';
            });
        }
    </script>

</x-landing-layout>