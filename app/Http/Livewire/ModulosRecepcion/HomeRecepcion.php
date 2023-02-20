<?php

namespace App\Http\Livewire\ModulosRecepcion;

use Livewire\Component;

class HomeRecepcion extends Component
{
    public $user;
    public $query;

    public function mount($nombre){
        $this->user = $nombre;
        //print_r($user);
    }
    public function render()
    {
        return view('livewire.modulos-recepcion.home-recepcion');
    }
}
