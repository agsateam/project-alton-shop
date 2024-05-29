<?php

namespace App\Livewire\Admin\Pengguna;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PenggunaForm extends Form
{
    public $name;
    public $email;
    public $password;
    public $conf_password;
    public $checkbox_hak_akses = [];

    public function simpan()
    {
        dd($this->name, $this->email, $this->password, $this->conf_password, $this->checkbox_hak_akses);
    }
}
