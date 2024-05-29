<?php

namespace App\Livewire\Admin\Pengguna;

use Livewire\Component;

class Edit extends Component
{
    public $user;
    public $name;
    public $email;
    public $role;
    public $hak_akses;

    public function mount()
    {
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        // $this->role = $this->user->role;
        // $this->hak_akses = $this->user->hak_akses;
    }

    public function render()
    {
        return view('livewire.admin.pengguna.edit');
    }
}
