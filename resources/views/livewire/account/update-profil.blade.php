<div>
    <span class="block">
        @if (session()->has('pesan'))
        <div role="alert" class="alert alert-success text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>{{ session('pesan') }}</span>
        </div>
        @endif
    </span>
    <form wire:submit="update" method="POST">
        <div class="grid gap-6 mb-4 md:grid-cols-2 pt-2 px-3">
            <div>
                <label for="nama_depan" class="block mb-2 text-sm font-medium {{ $errors->has('form.nama_depan') ? 'text-red-500' : 'text-black'; }}">Nama Depan</label>
                <input type="text" wire:model="form.nama_depan" id="nama_depan" class="border {{ $errors->has('form.nama_depan') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"/>
                @error('form.nama_depan')
                <div class="text-red-500 text-sm w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div>
            <div>
                <label for="nama_belakang" class="block mb-2 text-sm font-medium {{ $errors->has('form.nama_belakang') ? 'text-red-500' : 'text-black'; }}">Nama Belakang</label>
                <input type="text" wire:model="form.nama_belakang" id="nama_belakang" class="border {{ $errors->has('form.nama_belakang') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"/>
                @error('form.nama_belakang')
                <div class="text-red-500 text-sm w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div>
            <div>
                <label for="ttl" class="block mb-2 text-sm font-medium {{ $errors->has('form.ttl') ? 'text-red-500' : 'text-black'; }}">Tanggal Lahir</label>
                <input type="date" wire:model="form.ttl" id="ttl" class="border {{ $errors->has('form.ttl') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="Select date">
                @error('form.ttl')
                <div class="text-red-500 text-sm w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div>
            <div>
                <label for="jenis_kelamin" class="block mb-2 text-sm font-medium {{ $errors->has('form.jenis_kelamin') ? 'text-red-500' : 'text-black'; }}">Jenis Kelamin</label>
                <select wire:model="form.jenis_kelamin" id="jenis_kelamin" class="border {{ $errors->has('form.jenis_kelamin') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="laki-laki">Laki - Laki</option>
                    <option value="wanita">Wanita</option>
                </select>
                @error('form.jenis_kelamin')
                <div class="text-red-500 text-sm w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium {{ $errors->has('form.email') ? 'text-red-500' : 'text-black'; }}">Email</label>
                <input type="email" wire:model="form.email" id="email" class="border {{ $errors->has('form.email') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"/>
                @error('form.email')
                <div class="text-red-500 text-sm w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div>
            <div>
                <label for="no_hp" class="block mb-2 text-sm font-medium {{ $errors->has('form.no_hp') ? 'text-red-500' : 'text-black'; }}">Nomor Hp</label>
                <input type="tel" wire:model="form.no_hp" id="no_hp" class="border {{ $errors->has('form.no_hp') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5" pattern="08[0-9]{10}"/>
                @error('form.no_hp')
                <div class="text-red-500 text-sm w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div>
            <div>
                <label for="province" class="block mb-2 text-sm font-medium {{ $errors->has('form.province') ? 'text-red-500' : 'text-black'; }}">Provinsi</label>
                <select wire:model="form.province" id="province" class="border {{ $errors->has('form.province') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5">
                </select>
                @error('form.provinsi')
                <div class="text-red-500 text-sm w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div> 
            <div>
                <label for="city" class="block mb-2 text-sm font-medium {{ $errors->has('form.city') ? 'text-red-500' : 'text-black'; }}">Kota</label>
                <select wire:model="form.city" id="city" class="border {{ $errors->has('form.city') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5">
                    <option selected>Pilih Kota</option>
                    <option disabled>Pilih provinsi lebih dulu.</option>
                </select>
                @error('form.city')
                <div class="text-red-500 text-sm w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div> 
            <div>
                <label for="district" class="block mb-2 text-sm font-medium {{ $errors->has('form.district') ? 'text-red-500' : 'text-black'; }}">Kecamatan</label>
                <select wire:model="form.district" id="district" class="border {{ $errors->has('form.district') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5">
                    <option selected>Pilih Kecamatan</option>
                    <option disabled>Pilih kota lebih dulu.</option>
                </select>
                @error('form.district')
                <div class="text-red-500 text-sm w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div> 
            <div class="flex flex-col">
                <label for="kode_pos" class="block mb-2 text-sm font-medium {{ $errors->has('form.kode_pos') ? 'text-red-500' : 'text-black'; }}">Kode Pos</label>
                <input type="text" wire:model="form.kode_pos" id="kode_pos" class="border {{ $errors->has('form.kode_pos') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"/>
                <div class="place-self-end">
                    <a class="text-xs text-primary hover:text-secondary font-semibold inline-flex mt-1 md:mt-2" href="https://kodepos.posindonesia.co.id/kodeposnewlist" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                        </svg>
                        &nbsp;Cari Kode POS
                    </a>
                </div>
                @error('form.kode_pos')
                <div class="text-red-500 text-sm w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div> 
        </div>
        <div class="mb-6 px-3">
            <button type="submit" class="text-white bg-primary focus:ring-4 focus:outline-none focus:ring-primary font-medium text-xl w-full px-5 py-2.5 text-center">Simpan Perubahan</button>
        </div>
    </form>

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
                        selectProvince.innerHTML += `<option value="${item.id}">${item.name}</option>`;
                    });
                })
                .catch((error) => {
                    selectProvince.innerHTML = `
                        <option selected disabled>Pilih Provinsi</option>
                        <option disabled>Data tidak ditemukan, reload halaman!</option>
                    `;
                });
        }
    </script>
</div>
