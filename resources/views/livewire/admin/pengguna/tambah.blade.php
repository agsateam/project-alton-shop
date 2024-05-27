<div>
    <div class="card-body relative overflow-x-auto shadow-md border">
        <form action="{{ url('/pengguna/kelola-pengguna/tambah') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-4 mb-3">
                <x-input-float-label name="form.name" type="text" label="Username" class="mb-1"/>
                @error('form.name')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
                <x-input-float-label name="form.email" type="email" label="Email" class="mb-1"/>
                @error('form.email')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
                <x-input-float-label name="form.password" type="password" click="togglePass()" hidden="new-password-icon-hidden" shown="new-password-icon-shown" label="Masukan Kata Sandi Baru" class="mb-1"/>
                @error('form.password')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                @enderror
                <x-input-float-label name="form.conf_password" type="password" click="toggleConfPass()" hidden="conf-password-icon-hidden" shown="conf-password-icon-shown" label="Konfirmasi Kata Sandi Baru" class="mb-1"/>
                @error('form.conf_password')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                @enderror
                <x-select-float-label name="form.role" id="role" label="Role" class="w-full">
                    <option value="" selected disabled>Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </x-select-float-label>
                @error('form.role')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
                <x-select-float-label name="form.hak_akses" id="hak_akses" label="Hak Akses" class="w-full">
                    <option value="" selected disabled>Pilih Hak Akses</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </x-select-float-label>
                @error('form.hak_akses')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
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