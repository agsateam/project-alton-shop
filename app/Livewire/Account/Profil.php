<?php

namespace App\Livewire\Account;

use App\Livewire\Forms\ProfilForm;
use Livewire\Component;

class Profil extends Component
{
    public ProfilForm $form;
    public string $nama_depan = '';
    public string $email = '';

    public function mount(): void
    {
        $user = auth()->user();
        $this->form->nama_depan = $user->name;
        $this->form->email = $user->email;
    }
    public function render()
    {
        return view('livewire.account.profil');
    }

    public function update(): void
    {
        $this->form->update();
    }
}
