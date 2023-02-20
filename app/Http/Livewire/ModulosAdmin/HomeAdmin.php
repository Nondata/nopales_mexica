<?php

namespace App\Http\Livewire\ModulosAdmin;

use App\Models\User;
use Livewire\Component;

class HomeAdmin extends Component
{
    public function render()
    {
        $items = User::all();
        return view('livewire.modulos-admin.home-admin', compact('items') );
    }
}
