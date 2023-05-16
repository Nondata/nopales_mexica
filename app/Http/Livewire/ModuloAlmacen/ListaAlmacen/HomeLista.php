<?php

namespace App\Http\Livewire\ModuloAlmacen\ListaAlmacen;

use App\Models\Empaque;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeLista extends Component
{   
    public function cerrar_sesion()
    {
        Auth::logout();
        return redirect()->to('/');
    }
    public function render()
    {
        $producto = Empaque::all();
        return view('livewire.modulo-almacen.lista-almacen.home-lista', compact('producto'));
    }
}
