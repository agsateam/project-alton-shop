<?php

namespace App\Livewire\Account;

use Livewire\Component;

class UbahSandi extends Component
{
    public UbahSandiForm $form;

    public function render()
    {
        return view('livewire.account.ubah-sandi');
    }

    public function update(): void
    {
        $this->form->update();
    }
}
