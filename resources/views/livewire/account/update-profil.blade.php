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
    <form wire:submit="update" method="POST">
        <div class="grid gap-6 mb-4 md:grid-cols-2 pt-2 px-3">
            <div>
                <x-input-float-label name="form.nama_depan" type="text" label="Nama Depan" class="mb-1"/>
                @error('form.nama_depan')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div>
            <div>
                <x-input-float-label name="form.nama_belakang" type="text" label="Nama Belakang" class="mb-1"/>
                @error('form.nama_belakang')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div>
            <div>
                <x-input-float-label name="form.ttl" type="date" label="Tanggal Lahir" class="mb-1"/>
                @error('form.ttl')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div>
            <div>
                <x-select-float-label name="form.jenis_kelamin" id="jenis_kelamin" label="Jenis Kelamin" class="w-full">
                    <option value="" selected disabled>Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </x-select-float-label>
                @error('form.jenis_kelamin')
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
                <x-input-float-label name="form.no_hp" type="tel" label="Nomer Hp" pattern="08[0-9]{10}" class="mb-1"/>
                @error('form.no_hp')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div>
            <div>
                <x-select-float-label name="form.province" label="Provinsi" id="province" class="w-full">
                    <option value="{{ $this->form->province == '' ? '' : $this->form->province }}" selected>{{ $this->form->province == '' ? 'Pilih Provinsi' : $this->form->province }}</option>
                    @foreach ($prov as $p)
                    <option value="{{ $p['name'] }}" id="{{ $p['id'] }}">{{ $p['name'] }}</option>
                    @endforeach
                </x-select-float-label>
                @error('form.province')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div> 
            <div>
                <x-select-float-label name="form.city" label="Kota" id="city" value="{{ $this->form->city }}" class="w-full">
                    <option value="{{ $this->form->city == '' ? '' : $this->form->city }}" selected>{{ $this->form->city == '' ? 'Pilih Kota' : $this->form->city }}</option>
                    <option disabled>Pilih provinsi lebih dulu.</option>
                </x-select-float-label>
                @error('form.city')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div> 
            <div>
                <x-select-float-label name="form.district" label="Kecamatan" id="district" value="{{ $this->form->district }}" class="w-full">
                    <option value="{{ $this->form->district == '' ? '' : $this->form->district }}" selected>{{ $this->form->district == '' ? 'Pilih Kecamatan' : $this->form->district }}</option>
                    <option disabled>Pilih kota lebih dulu.</option>
                </x-select-float-label>
                @error('form.district')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div> 
            <div class="flex flex-col">
                <x-input-float-label name="form.kode_pos" type="number" label="Kode Pos" class="mb-1"/>
                @error('form.kode_pos')
                <div class="text-red-500 text-xs w-full h-fit flex flex-row">
                    <span>{{ $message }}</span>
                    @enderror
                    <a class="text-xs text-primary hover:text-secondary font-semibold inline-flex ml-auto" href="https://kodepos.posindonesia.co.id/kodeposnewlist" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                        </svg>
                        &nbsp;Cari Kode POS
                    </a>
                @error('form.kode_pos')
                </div>                
                @enderror
            </div> 
        </div>
        <div class="mb-6 px-3">
            <button type="submit" class="text-white bg-primary focus:ring-4 focus:outline-none focus:ring-primary font-medium text-xl w-full px-5 py-2.5 text-center">Simpan Perubahan</button>
        </div>
    </form>
</div>
