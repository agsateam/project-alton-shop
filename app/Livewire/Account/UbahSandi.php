<?php

namespace App\Livewire\Account;

use Livewire\Component;

class UbahSandi extends Component
{
    public UbahSandiForm $form;
    public $sandi_lama;
    public $pass;

    public function mount()
    {
        $user = auth()->user();
        if (!$user->password == NULL) {
            $this->pass = true;
        } else {
            $this->pass = false;
        }
    }

    public function render()
    {
        return view('livewire.account.ubah-sandi');
    }

    public function update(): void
    {
        $this->form->update();
    }

    public function updateNew(): void
    {
        $this->form->updateNew();
    }
}
