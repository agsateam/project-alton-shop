<div>
    <span class="block">
        @if (session()->has('pesan'))
        <div role="alert" class="alert alert-success text-white mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>{{ session('pesan') }}</span>
        </div>
        @elseif(session()->has('pesan-gagal'))
        <div role="alert" class="alert alert-error text-white mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>              
            <span>{{ session('pesan-gagal') }}</span>
        </div>
        @endif
    </span>
    @if ($pass == true)
    <form wire:submit="update" method="POST">
    @elseif($pass == false)
    <form wire:submit="updateNew" method="POST">
    @endif
        @if($pass == true)
        <div class="mb-4 pt-2 px-3">
            <x-input-float-label name="form.sandi_lama" type="password" click="toggleOldPass()" hidden="old-password-icon-hidden" shown="old-password-icon-shown" label="Masukan Kata Sandi Lama" class="mb-1"/>
            @error('form.sandi_lama')
            <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                <span>{{ $message }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            </div>
            @enderror
        </div>
        @endif
        <div class="grid gap-6 mb-4 md:grid-cols-2 pt-2 px-3">
            <div>
                <x-input-float-label name="form.sandi_baru" type="password" click="toggleNewPass()" hidden="new-password-icon-hidden" shown="new-password-icon-shown" label="Masukan Kata Sandi Baru" class="mb-1"/>
                @error('form.sandi_baru')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                @enderror
            </div>
            <div>
                <x-input-float-label name="form.conf_sandi_baru" type="password" click="toggleConfPass()" hidden="conf-password-icon-hidden" shown="conf-password-icon-shown" label="Konfirmasi Kata Sandi Baru" class="mb-1"/>
                @error('form.conf_sandi_baru')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
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
</div>
<script>
    function toggleNewPass() {
        let passwordInput = document.getElementById('form.sandi_baru');
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
        let passwordInput = document.getElementById('form.conf_sandi_baru');
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
    function toggleOldPass() {
        let passwordInput = document.getElementById('form.sandi_lama');
        let iconHidden = document.getElementById('old-password-icon-hidden');
        let iconShown = document.getElementById('old-password-icon-shown');

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
