<?php

namespace App\Livewire\Account;

use App\Livewire\Account\UpdateProfilForm;
use Livewire\Component;

class UpdateProfil extends Component
{
    public UpdateProfilForm $form;
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
        return view('livewire.account.update-profil');
    }

    public function update(): void
    {
        $this->form->update();
    }
}
