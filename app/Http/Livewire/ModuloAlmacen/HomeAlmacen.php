<?php

namespace App\Http\Livewire\ModuloAlmacen;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeAlmacen extends Component
{
    public function render()
    {
        if(Auth::check()){
            return view('livewire.modulo-almacen.home-almacen');
        }else{
            return view('index');
        }
    }
}
