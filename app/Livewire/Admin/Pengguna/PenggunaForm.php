<?php

namespace App\Livewire\Admin\Pengguna;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PenggunaForm extends Form
{
    public $name;
    public $email;
    public $role;
    public $hak_akses;
}
