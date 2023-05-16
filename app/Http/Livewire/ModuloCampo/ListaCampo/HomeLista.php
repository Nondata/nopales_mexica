<?php

namespace App\Http\Livewire\ModuloCampo\ListaCampo;

use App\Models\Campo;
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
        $campo = Campo::all();
        return view('livewire.modulo-campo.lista-campo.home-lista', compact('campo'));
    }
}
