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
            'email'         => 'required|email|max:255',
        ],
        message: [
            'nama_depan.required'   => 'Nama depan tidak boleh kosong',
            'nama_depan.max'        => 'Nama depan terlalu panjang',
            'email.required'        => 'Email tidak boleh kosong',
            'email.email'           => 'Email harus berupa alamat email yang valid',
            'email.max'             => 'Email terlalu panjang',
        ]
    )]
    public string $nama_depan = '';
    public string $email = '';

    public function update()
    {
        $this->validate();
        $idUser = auth()->id();
        $user = User::find($idUser);
        $user->update([
            'name' => $this->nama_depan,
            'email' => $this->email,
        ]);
        session()->flash('pesan', 'Profil berhasil diperbarui');
        return redirect('/informasi-pribadi');
    }
}
