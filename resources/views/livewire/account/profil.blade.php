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
        <div class="grid gap-6 mb-6 md:grid-cols-2 pt-2 px-3">
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
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                       <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input datepicker datepicker-format="mm/dd/yyyy" type="text" wire:model="form.ttl" id="ttl" class="border {{ $errors->has('form.ttl') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 ps-10" placeholder="Select date">
                </div>
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
                <input type="tel" wire:model="form.no_hp" id="no_hp" class="border {{ $errors->has('form.no_hp') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5" pattern="08[0-9]{11}"/>
                @error('form.no_hp')
                <div class="text-red-500 text-sm w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div>
            <div>
                <label for="provinsi" class="block mb-2 text-sm font-medium {{ $errors->has('form.provinsi') ? 'text-red-500' : 'text-black'; }}">Provinsi</label>
                <select wire:model="form.provinsi" id="provinsi" class="border {{ $errors->has('form.provinsi') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5">
                    <option value="">Pilih Provinsi</option>
                    <option value="pekalongan">Pekalongan</option>
                    <option value="pemalang">Pemalang</option>
                </select>
                @error('form.provinsi')
                <div class="text-red-500 text-sm w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div> 
            <div>
                <label for="kabupaten/kota" class="block mb-2 text-sm font-medium {{ $errors->has('form.kabupaten/kota') ? 'text-red-500' : 'text-black'; }}">Kabupaten/Kota</label>
                <select wire:model="form.kabupaten/kota" id="kabupaten/kota" class="border {{ $errors->has('form.kabupaten/kota') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5">
                    <option value="">Pilih Kabupaten/Kota</option>
                    <option value="pekalongan">Pekalongan</option>
                    <option value="pemalang">Pemalang</option>
                </select>
                @error('form.kabupaten/kota')
                <div class="text-red-500 text-sm w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div> 
            <div>
                <label for="kecamatan" class="block mb-2 text-sm font-medium {{ $errors->has('form.kecamatan') ? 'text-red-500' : 'text-black'; }}">Kecamatan</label>
                <select wire:model="form.kecamatan" id="kecamatan" class="border {{ $errors->has('form.kecamatan') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5">
                    <option value="">Pilih Kecamatan</option>
                    <option value="pekalongan_timur">Pekalongan Timur</option>
                    <option value="pekalongan_barat">Pekalongan Barat</option>
                </select>
                @error('form.kecamatan')
                <div class="text-red-500 text-sm w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div> 
            <div>
                <label for="desa" class="block mb-2 text-sm font-medium {{ $errors->has('form.desa') ? 'text-red-500' : 'text-black'; }}">Desa</label>
                <select wire:model="form.desa" id="desa" class="border {{ $errors->has('form.desa') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5">
                    <option value="">Pilih Desa</option>
                    <option value="pekajangan">Pekajangan</option>
                    <option value="kertijayan">Kertijayan</option>
                </select>
                @error('form.desa')
                <div class="text-red-500 text-sm w-full h-fit flex flex-row mt-1">
                    <span>{{ $message }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>                
                @enderror
            </div> 
            <div>
                <label for="kode_pos" class="block mb-2 text-sm font-medium {{ $errors->has('form.kode_pos') ? 'text-red-500' : 'text-black'; }}">Kode Pos</label>
                <input type="text" wire:model="form.kode_pos" id="kode_pos" class="border {{ $errors->has('form.kode_pos') ? 'border-red-500' : 'border-black'; }} text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"/>
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
</div>
