<?php

namespace App\Livewire\Account;

use App\Models\User;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Hash;
use Livewire\Form;

class UbahSandiForm extends Form
{
    #[Rule(
        [
            'sandi_lama' => 'required|min:8',
            'sandi_baru' => 'required|min:8',
            'conf_sandi_baru' => 'required|same:sandi_baru',
        ],
        message: [
            'sandi_lama.required' => 'Kata sandi lama tidak boleh kosong',
            'sandi_lama.min' => 'Kata sandi lama minimal 8 karakter',
            'sandi_baru.required' => 'Kata sandi baru tidak boleh kosong',
            'sandi_baru.min' => 'Kata sandi baru minimal 8 karakter',
            'conf_sandi_baru.required' => 'Konfirmasi kata sandi baru tidak boleh kosong',
            'conf_sandi_baru.same' => 'Konfirmasi kata sandi baru tidak sama dengan kata sandi baru',
        ]
    )]
    public string $sandi_lama = '';
    public string $sandi_baru = '';
    public string $conf_sandi_baru = '';

    public function update()
    {
        $this->validate();
        $idUser = auth()->id();
        $user = User::where('id', $idUser)->first();
        if (!Hash::check($this->sandi_lama, $user->password)) {
            session()->flash('pesan-gagal', 'Kata sandi lama tidak sesuai');
            return redirect('/ubah-sandi');
        }
        $user->update([
            'password' => Hash::make($this->sandi_baru),
        ]);
        session()->flash('pesan', 'Kata sandi berhasil diubah');
        return redirect('/ubah-sandi');
    }
}
