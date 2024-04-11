<?php

namespace App\Livewire\Checkout;

use Livewire\Component;

class Submit extends Component
{
    public $subTotal;
    public $tosAgree = false;

    public function render()
    {
        return view('livewire.checkout.submit');
    }

    public function tosCheck()
    {
        $this->tosAgree = !$this->tosAgree;
    }
}
