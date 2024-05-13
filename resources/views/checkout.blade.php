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

    <div class="w-full flex flex-col md:flex-row">
        <div class="w-full py-5 px-5 md:px-10">
            @persist('checkout_form')
            {{-- Contact --}}
            <div class="pb-10 w-full">
                <div class="text-2xl font-bold mb-3">Kontak</div>
                <x-input-float-label name="email" type="email" label="Email" class="mb-3"/>
                <x-input-float-label name="phone" type="text" label="Nomor Telepon"/>
            </div>
            
            {{-- Address --}}
            <div class="pb-10 w-full">
                <div class="text-2xl font-bold mb-3">Informasi Pengiriman</div>
                <x-input-float-label name="customer_name" type="text" label="Nama Lengkap Penerima" class="mb-2"/>
                <div class="flex flex-col md:flex-row">
                    <x-select-float-label name="province" id="province" label="Provinsi" class="w-full md:w-1/2 mt-1 mb-2"/>
                    <x-select-float-label name="city" id="city" label="Kota" class="w-full md:w-1/2 md:ml-2 mt-1 mb-2">
                        <option selected disabled>Pilih Kota</option>
                        <option disabled>Pilih provinsi lebih dulu.</option>
                    </x-select-float-label>
                </div>
                <div class="flex flex-col md:flex-row">
                    <x-select-float-label name="district" id="district" label="Kecamatan" class="w-full md:w-1/2 mt-1 mb-2">
                        <option selected disabled>Pilih Kecamatan</option>
                        <option disabled>Pilih kota lebih dulu.</option>
                    </x-select-float-label>
                    <div class="w-full md:w-1/2 mt-1 mb-2 md:ml-2">
                        <x-input-float-label name="postal_code" type="text" label="Kode POS" class="mb-0"/>
                        <a class="text-xs text-primary hover:text-secondary font-semibold inline-flex mt-1 md:mt-2" href="https://kodepos.posindonesia.co.id/kodeposnewlist" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                            </svg>
                            &nbsp;Cari Kode POS
                        </a>
                    </div>
                </div>
                <x-textarea-float-label name="customer_address" label="Alamat Lengkap" class="mt-1"/>
            </div>
            @endpersist
            
            {{-- Ongkir --}}
            <div class="pb-10 w-full">
                <div class="flex flex-row justify-between">
                    <div class="text-2xl font-bold mb-3">Pengiriman</div>
                    {{-- TODO: implement real ongkir by API --}}
                    <button onclick="cekOngkir()" class="btn btn-sm bg-primary hover:bg-secondary rounded-sm text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 0 1-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004ZM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 0 1-.921.42Z" />
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v.816a3.836 3.836 0 0 0-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 0 1-.921-.421l-.879-.66a.75.75 0 0 0-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 0 0 1.5 0v-.81a4.124 4.124 0 0 0 1.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 0 0-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 0 0 .933-1.175l-.415-.33a3.836 3.836 0 0 0-1.719-.755V6Z" clip-rule="evenodd" />
                        </svg>                          
                        Cek Ongkir
                    </button>
                </div>
                {{-- List Ongkir --}}
                <div class="block" id="shipping_cost_desc">
                    <div class="w-full bg-gray-200 px-3 py-6 inline-flex justify-center border-[1px] border-[#B7B7B7]">
                        <span class="text-xs md:text-sm text-gray-500">Klik tombol "Cek Ongkir" di kanan atas untuk mengetahui ongkos kirim, pastikan alamat anda sudah benar.</span>
                    </div>
                </div>
                <div class="hidden" id="shipping_cost_load">
                    <div class="w-full p-3 flex flex-col border-[1px] border-[#B7B7B7]">
                        <div class="flex flex-row justify-between">
                            <span class="w-32 md:w-52 h-4 mb-1 bg-gray-300 rounded-sm animate-pulse"></span>
                            <span class="w-16 h-4 mb-1 bg-gray-300 rounded-sm animate-pulse"></span>
                        </div>
                        <span class="w-16 md:w-32 h-4 mb-1 bg-gray-300 rounded-sm animate-pulse"></span>
                        <span class="w-full h-4 bg-gray-300 rounded-sm animate-pulse"></span>
                    </div>
                </div>
                <div class="hidden" id="shipping_cost_list">
                    <button class="w-full p-3 flex flex-row border-[1px] border-[#B7B7B7]">
                        <div class="mr-5 inline-flex self-center">
                            <span class="w-7 h-7 rounded-full border-2 border-[#B7B7B7]"></span>
                        </div>
                        <div class="flex flex-col grow text-left">
                            <span class="text-sm font-semibold">Sicepat Ekspres - REG</span>
                            <span class="text-xs">2 - 3 days</span>
                            <span class="text-xs">Dikirim dari PEKALONGAN ke BATUNUNGGAL - BANDUNG</span>
                        </div>
                        <span class="text-xs md:text-sm">Rp 16.000</span>
                    </button>
                    <button class="w-full p-3 flex flex-row border-[1px] border-primary">
                        <div class="mr-5 inline-flex self-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 text-primary">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>                          
                        </div>
                        <div class="flex flex-col grow text-left">
                            <span class="text-sm font-semibold">J&T Ekspres - Reguler</span>
                            <span class="text-xs">2 - 3 days</span>
                            <span class="text-xs">Dikirim dari PEKALONGAN ke BATUNUNGGAL - BANDUNG</span>
                        </div>
                        <span class="text-xs md:text-sm">Rp 16.000</span>
                    </button>
                    <button class="w-full p-3 flex flex-row border-[1px] border-[#B7B7B7]">
                        <div class="mr-5 inline-flex self-center">
                            <span class="w-7 h-7 rounded-full border-2 border-[#B7B7B7]"></span>
                        </div>
                        <div class="flex flex-col grow text-left">
                            <span class="text-sm font-semibold">Ninja Ekspres - Reguler</span>
                            <span class="text-xs">2 - 3 days</span>
                            <span class="text-xs">Dikirim dari PEKALONGAN ke BATUNUNGGAL - BANDUNG</span>
                        </div>
                        <span class="text-xs md:text-sm">Rp 16.000</span>
                    </button>
                </div>
            </div>

            {{-- Payment --}}
            <div class="w-full md:pb-16">
                <div class="text-2xl font-bold mb-3">Pembayaran</div>
                <div class="w-full rounded-sm border-[1px] bg-gray-200 border-[#B7B7B7]">
                    <div class="w-full py-3 px-2 md:px-5 bg-white">
                        <div class="flex flex-row text-sm items-center">
                            <span class="text-xs md:text-sm grow pr-5">Payment by Xendit</span>
                            <div class="flex">
                                <img src="https://cdn.shopify.com/shopifycloud/checkout-web/assets/5e3b05b68f3d31b87e84.svg" class="hidden sm:flex w-10 mr-1">
                                <img src="https://cdn.shopify.com/shopifycloud/checkout-web/assets/0169695890db3db16bfe.svg" class="hidden sm:flex w-10 mr-1">
                                <img src="https://cdn.shopify.com/shopifycloud/checkout-web/assets/a682f971fb8ae9f2351a.svg" class="w-10 mr-1">
                                <img src="https://cdn.shopify.com/shopifycloud/checkout-web/assets/b02db2649b5b33b432b8.svg" class="w-10 mr-1">
                                
                                <button class="w-10 bg-white border-[1px] border-gray-200 rounded-sm inline-flex items-center justify-center text-xs font-medium" onmouseover="showAllPayment(true)" onmouseout="showAllPayment(false)">+18</button>

                                <div id="payment-more" class="hidden absolute rounded-sm px-4 py-2 bg-gray-600 text-white w-44 right-0 md:right-[40%] mr-[73px] md:mr-[85px] -mt-[80px]">
                                    <p class="mb-2">
                                        <span class="text-sm font-semibold">Virtual Account </span><br/>
                                        <span class="text-xs mb-2">
                                            BCA, BRI, BNI, Mandiri, CIMB Niaga, Permata, BSI, NeoBank
                                        </span>                                
                                    </p>
                                    <p class="mb-2">
                                        <span class="text-sm font-semibold">Kartu Kredit </span><br/>
                                        <span class="text-xs mb-2">
                                            MasterCard, VISA, JCB
                                        </span>                                
                                    </p>
                                    <p>
                                        <span class="text-sm font-semibold">QRIS</span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center w-full py-8 px-5 lg:px-36 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-270.8 371 102 52" class="w-44 mb-5 text-gray-400">
                            <path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" d="M-182 404v16.8c0 .7-.4 1.2-1 1.2h-75.7c-.7 0-1.2-.6-1.2-1.2v-47.6c0-.7.6-1.2 1.2-1.2h75.7c.7 0 1 .6 1 1.2V395m-78-14h78m-17 18h27m-3.9-4.6 4.5 4.6-4.5 4.6"></path>
                            <circle cx="-255.5" cy="376.5" r="1.5" fill="currentColor"></circle><circle cx="-250.5" cy="376.5" r="1.5" fill="currentColor"></circle><circle cx="-245.5" cy="376.5" r="1.5" fill="currentColor"></circle>
                        </svg>
                        <span class="text-gray-500 text-xs md:text-sm">
                            Setelah klik "Bayar sekarang", anda akan diarahkan ke halaman pembayaran dari Xendit untuk menyelesaikan pembelian anda dengan aman.
                        </span>
                    </div>
                </div>
            </div>

        </div>

        <div class="w-full md:w-3/5 px-5 md:px-10 md:bg-gray-50">
            <div class="block md:sticky md:top-0 pb-10 pt-10 md:pt-5">
                {{-- Items --}}
                <div class="pb-10 w-full">
                    <div class="text-2xl font-bold mb-2">Items</div>
                    @if (!$cart)
                    <div class="w-full bg-gray-200 px-3 py-6 inline-flex justify-center border-[1px] border-[#B7B7B7] text-xs md:text-sm text-gray-500">
                        Keranjang anda masih kosong.
                    </div>
                    @endif
                    @foreach ($cart as $item)
                    <div class="flex flex-row py-2">
                        <div class="indicator">
                            <img src="{{ $item['photo'] }}" class="w-16 h-14">
                            <span class="badge badge-md bg-primary text-white indicator-item mr-2">{{ $item['size'] }}</span>
                        </div>
                        <div class="flex flex-col ml-5 w-full">
                            <span class="text-sm mb-2">{{ $item['name'] }}</span>
                            <div class="text-xs flex flex-row justify-between">
                                <span class="mr-2">@toRupiah($item['price'])</span>
                                x
                                <span class="ml-2 mr-2">{{ $item['qty'] }}</span>
                                =
                                <span class="ml-2 font-bold">@toRupiah($item['price'] * $item['qty'])</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
    
                {{-- Ringkasan --}}
                <div class="">
                    <div class="text-2xl font-bold">Ringkasan</div>
                    <div class="divider"></div>
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
                    @livewire('checkout.submit', ['subTotal' => $subTotal])
                </div>
            </div>
        </div>
    </div>

    @livewire('product.cart', ['isFromCheckoutPage' => true])

    <script>
        getProvinces();
        
        function getProvinces(){
            let selectProvince = document.querySelector("#province");
            selectProvince.innerHTML = `
                <option selected disabled>Pilih Provinsi</option>
                <option disabled>Loading ...</option>
            `;

            fetch('https://vardrz.github.io/api-wilayah-indonesia/static/api/provinces.json')
                .then(response => response.json())
                .then((data) => {
                    console.log(data.length + " provinces loaded");
                    
                    selectProvince.innerHTML = `<option selected disabled>Pilih Provinsi</option>`;
                    data.forEach(item => {
                        selectProvince.innerHTML += `<option value="${item.name}" id="${item.id}">${item.name}</option>`;
                    });
                })
                .catch((error) => {
                    selectProvince.innerHTML = `
                        <option selected disabled>Pilih Provinsi</option>
                        <option disabled>Data tidak ditemukan, reload halaman!</option>
                    `;
                });
        }

        function cekOngkir(){
            desc = document.getElementById("shipping_cost_desc");
            load = document.getElementById("shipping_cost_load");
            list = document.getElementById("shipping_cost_list");

            // hide description
            desc.classList.remove("block");
            desc.classList.add("hidden");
            // hide list (if showed)
            list.classList.remove("block");
            list.classList.add("hidden");
            // show loader
            load.classList.remove("hidden");
            load.classList.add("block");
            
            setTimeout(() => {
                // hide loader
                load.classList.remove("block");
                load.classList.add("hidden");
                // show list
                list.classList.remove("hidden");
                list.classList.add("block");                
            }, 5000);
        }

        function showAllPayment(bool){
            let show = document.querySelector("#payment-more");
            
            if(bool){
                show.classList.remove("hidden");
            }else{
                show.classList.add("hidden");
            }
        }
    </script>

</x-landing-layout>