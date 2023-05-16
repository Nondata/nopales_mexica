<?php

namespace App\Http\Livewire\ModuloDesespinado\ListaDesespinado;

use App\Models\Desespinado;
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
        $desespinado = Desespinado::all();
        return view('livewire.modulo-desespinado.lista-desespinado.home-lista', compact('desespinado'));
    }
}
