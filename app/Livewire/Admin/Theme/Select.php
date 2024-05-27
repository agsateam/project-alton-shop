<?php

namespace App\Livewire\Admin\Theme;

use Livewire\Component;
use App\Models\WebConfig;

class Select extends Component
{
    public $selected;

    public function mount()
    {
        $theme = WebConfig::first()->theme;
        $this->selected = $theme;
    }

    public function render()
    {
        return view('livewire.admin.theme.select');
    }

    public function select($theme)
    {
        $this->selected = $theme;
    }

    public function save()
    {
        WebConfig::find(1)->update(["theme" => $this->selected]);

        redirect(route("admin.theme"))->with('success', 'Warna Tema Website Berhasil Diubah.');
    }
}
