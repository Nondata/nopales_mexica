<?php

namespace App\Http\Livewire\ModulosPelado;

use Livewire\Component;

class HomePelado extends Component
{
    public $nombre;

    public function mount($nombre){
        $this->nombre = $nombre;
    }
    public function render()
    {
        return view('livewire.modulos-pelado.home-pelado');
    }
}
