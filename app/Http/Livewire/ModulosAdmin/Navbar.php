<?php

namespace App\Http\Livewire\ModulosAdmin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public function cerrar_sesion()
    {
        Auth::logout();

        return redirect()->to('/');
    }
    public function render()
    {
        return view('livewire.modulos-admin.navbar');
    }
}
