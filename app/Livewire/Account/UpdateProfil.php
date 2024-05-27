<?php

namespace App\Livewire\Account;

use App\Livewire\Account\UpdateProfilForm;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class UpdateProfil extends Component
{
    public UpdateProfilForm $form;
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
    public $prov;

    public function mount(): void
    {
        $user           = auth()->user();
        $api_province   = http::get('https://vardrz.github.io/api-wilayah-indonesia/static/api/provinces.json');
        $this->prov     = $api_province->json();

        $this->form->nama_depan = $user->name;
        $this->form->nama_belakang = $user->last_name;
        $this->form->ttl = $user->date_of_birth;
        $this->form->jenis_kelamin = $user->jenis_kelamin;
        if ($user->province == NULL) {
            $this->form->jenis_kelamin = '';
            $this->form->province = '';
            $this->form->city = '';
            $this->form->district = '';
        }
        $this->form->email = $user->email;
        $this->form->no_hp = $user->phone_number;
        $this->form->province = $user->province;
        $this->form->city = $user->city;
        $this->form->district = $user->district;
        $this->form->kode_pos = $user->postal_code;
    }
    public function render()
    {
        return view('livewire.account.update-profil');
    }

    public function update(): void
    {
        $this->form->update();
    }
}
