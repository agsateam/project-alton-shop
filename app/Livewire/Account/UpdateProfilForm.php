<?php

namespace App\Livewire\Account;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Form;

class UpdateProfilForm extends Form
{
    #[Rule(
        [
            'nama_depan'    => 'required|max:255',
            'nama_belakang' => 'required|max:255',
            'ttl'           => 'required|date',
            'jenis_kelamin' => 'required',
            'email'         => 'required|email|max:255',
            'no_hp'         => 'required|max:15',
            'province'      => 'required|string',
            'city'          => 'required|string',
            'district'      => 'required|string',
            'kode_pos'      => 'required|max:5',
        ],
        message: [
            'nama_depan.required'   => 'Nama depan tidak boleh kosong',
            'nama_depan.max'        => 'Nama depan terlalu panjang',
            'nama_belakang.required' => 'Nama belakang tidak boleh kosong',
            'nama_belakang.max'     => 'Nama belakang terlalu panjang',
            'ttl.required'          => 'Tanggal lahir tidak boleh kosong',
            'ttl.date'              => 'Tanggal lahir harus berupa tanggal',
            'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong',
            'email.required'        => 'Email tidak boleh kosong',
            'email.email'           => 'Email harus berupa alamat email yang valid',
            'email.max'             => 'Email terlalu panjang',
            'no_hp.required'        => 'Nomor HP tidak boleh kosong',
            'no_hp.max'             => 'Nomor HP terlalu panjang',
            'province.required'     => 'Provinsi tidak boleh kosong',
            'province.string'       => 'Provinsi harus berupa string',
            'city.required'         => 'Kota tidak boleh kosong',
            'city.string'           => 'Kota harus berupa string',
            'district.required'     => 'Kecamatan tidak boleh kosong',
            'district.string'       => 'Kecamatan harus berupa string',
            'kode_pos.required'     => 'Kode pos tidak boleh kosong',
            'kode_pos.max'          => 'Kode pos terlalu panjang',
        ]
    )]
    public $nama_depan;
    public $nama_belakang;
    public $ttl;
    public $jenis_kelamin;
    public $email;
    public $no_hp;
    public $province;
    public $city;
    public $district;
    public $kode_pos;

    public function update()
    {
        $this->validate();
        $idUser = auth()->id();
        $user = User::find($idUser);
        $user->update([
            'name'          => $this->nama_depan,
            'last_name'     => $this->nama_belakang,
            'date_of_birth' => $this->ttl,
            'jenis_kelamin' => $this->jenis_kelamin,
            'phone_number'  => $this->no_hp,
            'province'      => $this->province,
            'city'          => $this->city,
            'district'      => $this->district,
            'postal_code'   => $this->kode_pos,
            'email'         => $this->email,
        ]);
        session()->flash('pesan', 'Profil berhasil diperbarui');
        return redirect('/informasi-pribadi');
    }
}
