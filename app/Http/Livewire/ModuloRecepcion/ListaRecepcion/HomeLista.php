<?php

namespace App\Http\Livewire\ModuloRecepcion\ListaRecepcion;

use App\Models\Recepcion;
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
        $recepcion = Recepcion::all();
        return view('livewire.modulo-recepcion.lista-recepcion.home-lista', compact('recepcion'));
    }
}
