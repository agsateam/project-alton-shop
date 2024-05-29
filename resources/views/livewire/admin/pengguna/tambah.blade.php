<div>
    <div class="card-body relative overflow-x-auto shadow-md border">
        <form wire:submit="simpan" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-4 mb-3">
                <div>
                    <x-input-float-label name="form.name" type="text" label="Username" class="mb-1"/>
                    @error('form.name')
                    <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                        <span>{{ $message }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>                
                    @enderror
                </div>
                <div>
                    <x-input-float-label name="form.email" type="email" label="Email" class="mb-1"/>
                    @error('form.email')
                    <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                        <span>{{ $message }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>                
                    @enderror
                </div>
                <div>
                    <x-input-float-label name="form.password" type="password" click="togglePass()" hidden="new-password-icon-hidden" shown="new-password-icon-shown" label="Masukan Kata Sandi Baru" class="mb-1"/>
                    @error('form.password')
                    <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                        <span>{{ $message }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    @enderror
                </div>
                <div>
                    <x-input-float-label name="form.conf_password" type="password" click="toggleConfPass()" hidden="conf-password-icon-hidden" shown="conf-password-icon-shown" label="Konfirmasi Kata Sandi Baru" class="mb-1"/>
                    @error('form.conf_password')
                    <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                        <span>{{ $message }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-4 gap-4 mb-3">
                <div id="checkbox_produk">
                    <label for="checkbox_produk" class="border-b-2 ml-2 text-gray-500 border-gray-500">Hak Akses Produk</label>
                    <div class="flex flex-col mt-3">
                        @foreach ($PermissionsProduk as $item)
                        <div class="flex items-center mb-2 ml-1">
                            <input id="checkbox_produk_{{ $item }}" type="checkbox" wire:model="form.checkbox_hak_akses" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            <label for="checkbox_produk_{{ $item }}" class="ms-2 text-sm font-medium text-gray-900 capitalize">{{ $item }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="checkbox_kategori">
                    <label for="checkbox_kategori" class="border-b-2 ml-2 text-gray-500 border-gray-500">Hak Akses Kategori</label>
                    <div class="flex flex-col mt-3">
                        @foreach ($PermissionsKategori as $item)
                        <div class="flex items-center mb-2 ml-1">
                            <input id="checkbox_kategori_{{ $item }}" type="checkbox" wire:model="form.checkbox_hak_akses" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            <label for="checkbox_kategori_{{ $item }}" class="ms-2 text-sm font-medium text-gray-900 capitalize">{{ $item }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="checkbox_transaksi">
                    <label for="checkbox_transaksi" class="border-b-2 ml-2 text-gray-500 border-gray-500">Hak Akses Transaksi</label>
                    <div class="flex flex-col mt-3">
                        @foreach ($PermissionsTransaksi as $item)
                        <div class="flex items-center mb-2 ml-1">
                            <input id="checkbox_transaksi_{{ $item }}" type="checkbox" wire:model="form.checkbox_hak_akses" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            <label for="checkbox_transaksi_{{ $item }}" class="ms-2 text-sm font-medium text-gray-900 capitalize">{{ $item }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="checkbox_tentang_kami">
                    <label for="checkbox_tentang_kami" class="border-b-2 ml-2 text-gray-500 border-gray-500">Hak Akses Tentang Kami</label>
                    <div class="flex flex-col mt-3">
                        @foreach ($PermissionsTentangKami as $item)
                        <div class="flex items-center mb-2 ml-1">
                            <input id="checkbox_tentang_kami_{{ $item }}" type="checkbox" wire:model="form.checkbox_hak_akses" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            <label for="checkbox_tentang_kami_{{ $item }}" class="ms-2 text-sm font-medium text-gray-900 capitalize">{{ $item }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="checkbox_kebijakan_privasi">
                    <label for="checkbox_kebijakan_privasi" class="border-b-2 ml-2 text-gray-500 border-gray-500">Hak Akses Kebijakan Privasi</label>
                    <div class="flex flex-col mt-3">
                        @foreach ($PermissionsKebijakanPrivasi as $item)
                        <div class="flex items-center mb-2 ml-1">
                            <input id="checkbox_kebijakan_privasi_{{ $item }}" type="checkbox" wire:model="form.checkbox_hak_akses" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            <label for="checkbox_kebijakan_privasi_{{ $item }}" class="ms-2 text-sm font-medium text-gray-900 capitalize">{{ $item }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="checkbox_syarat_ketentuan">
                    <label for="checkbox_syarat_ketentuan" class="border-b-2 ml-2 text-gray-500 border-gray-500">Hak Akses Syarat Ketentuan</label>
                    <div class="flex flex-col mt-3">
                        @foreach ($PermissionsSyaratKetentuan as $item)
                        <div class="flex items-center mb-2 ml-1">
                            <input id="checkbox_syarat_ketentuan_{{ $item }}" type="checkbox" wire:model="form.checkbox_hak_akses" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            <label for="checkbox_syarat_ketentuan_{{ $item }}" class="ms-2 text-sm font-medium text-gray-900 capitalize">{{ $item }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="checkbox_faq">
                    <label for="checkbox_faq" class="border-b-2 ml-2 text-gray-500 border-gray-500">Hak Akses FAQ</label>
                    <div class="flex flex-col mt-3">
                        @foreach ($PermissionsFaq as $item)
                        <div class="flex items-center mb-2 ml-1">
                            <input id="checkbox_faq_{{ $item }}" type="checkbox" wire:model="form.checkbox_hak_akses" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            <label for="checkbox_faq_{{ $item }}" class="ms-2 text-sm font-medium text-gray-900 capitalize">{{ $item }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="checkbox_banner">
                    <label for="checkbox_banner" class="border-b-2 ml-2 text-gray-500 border-gray-500">Hak Akses Banner</label>
                    <div class="flex flex-col mt-3">
                        @foreach ($PermissionsBanner as $item)
                        <div class="flex items-center mb-2 ml-1">
                            <input id="checkbox_banner_{{ $item }}" type="checkbox" wire:model="form.checkbox_hak_akses" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            <label for="checkbox_banner_{{ $item }}" class="ms-2 text-sm font-medium text-gray-900 capitalize">{{ $item }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="checkbox_warna_tema">
                    <label for="checkbox_warna_tema" class="border-b-2 ml-2 text-gray-500 border-gray-500">Hak Akses Warna Tema</label>
                    <div class="flex flex-col mt-3">
                        @foreach ($PermissionsWarnaTema as $item)
                        <div class="flex items-center mb-2 ml-1">
                            <input id="checkbox_warna_tema_{{ $item }}" type="checkbox" wire:model="form.checkbox_hak_akses" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            <label for="checkbox_warna_tema_{{ $item }}" class="ms-2 text-sm font-medium text-gray-900 capitalize">{{ $item }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="checkbox_kelola_pengguna">
                    <label for="checkbox_kelola_pengguna" class="border-b-2 ml-2 text-gray-500 border-gray-500">Hak Akses Kelola Pengguna</label>
                    <div class="flex flex-col mt-3">
                        @foreach ($PermissionsKelolaPengguna as $item)
                        <div class="flex items-center mb-2 ml-1">
                            <input id="checkbox_kelola_pengguna_{{ $item }}" type="checkbox" wire:model="form.checkbox_hak_akses" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            <label for="checkbox_kelola_pengguna_{{ $item }}" class="ms-2 text-sm font-medium text-gray-900 capitalize">{{ $item }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="flex justify-between items-center">
                <a href="{{ route('admin.pengguna.kelola-pengguna') }}" wire:navigate class="flex items-center space-x-2 bg-primary text-white text-sm rounded-sm py-2 pr-3 pl-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                    </svg>                              
                    <span>
                        Kembali
                    </span>
                </a>
                <button type="submit" class="flex items-center space-x-2 bg-primary text-white text-sm rounded-sm py-2 pr-3 pl-2">
                    <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />  <circle cx="12" cy="14" r="2" />  <polyline points="14 4 14 8 8 8 8 4" /></svg>
                    <span>
                        Simpan
                    </span>
                </button>
            </div>
        </form>
    </div>
    <script>
        function togglePass() {
        let passwordInput = document.getElementById('form.password');
        let iconHidden = document.getElementById('new-password-icon-hidden');
        let iconShown = document.getElementById('new-password-icon-shown');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            iconHidden.classList.add('hidden');
            iconShown.classList.remove('hidden');
        } else {
            passwordInput.type = 'password';
            iconHidden.classList.remove('hidden');
            iconShown.classList.add('hidden');
        }
    }
    function toggleConfPass() {
        let passwordInput = document.getElementById('form.conf_password');
        let iconHidden = document.getElementById('conf-password-icon-hidden');
        let iconShown = document.getElementById('conf-password-icon-shown');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            iconHidden.classList.add('hidden');
            iconShown.classList.remove('hidden');
        } else {
            passwordInput.type = 'password';
            iconHidden.classList.remove('hidden');
            iconShown.classList.add('hidden');
        }
    }
    </script>
</div>