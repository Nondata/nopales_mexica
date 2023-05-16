<?php

namespace App\Http\Livewire\ModuloProduccion\ListaProduccion;

use App\Models\Produccion;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeLista extends Component
{
    public function cerrar_sesion(){
        Auth::logout();
        return redirect()->to('/');
    }
    public function render()
    {   
        $produccion = Produccion::all();
        return view('livewire.modulo-produccion.lista-produccion.home-lista', compact('produccion'));
    }
}
