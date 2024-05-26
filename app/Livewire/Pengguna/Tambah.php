<?php

namespace App\Livewire\Pengguna;

use Livewire\Component;

class Tambah extends Component
{
    public PenggunaForm $form;
    public $users;

    public function render()
    {
        return view('livewire.pengguna.tambah');
    }
}
