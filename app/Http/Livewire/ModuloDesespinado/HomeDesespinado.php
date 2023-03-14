<?php

namespace App\Http\Livewire\ModuloDesespinado;

use Carbon\Carbon;
use Livewire\Component;

class HomeDesespinado extends Component
{
    public $encargado;
    public $fecha;
    public $nombre;
    public $kg_pelado;
    public $piezas_peladas;
    public $observaciones;

    protected $rules = [
        'fecha' => '',
        'nombre' => 'required',
        'kg_pelado' => 'integer|required',
        'piezas_peladas' => 'integer|required',
        'observaciones' => ''
    ];

    protected $messages = [
        'nombre.required' => 'Seleccione el personal',
        'kg_pelado.required' => 'Ingrese los kilos pelados',
        'kg_pelado.integer' => 'Solo ingrese numeros',
        'piezas_peladas.required' => 'Ingrese las piezas peladas',
        'piezas_peladas.integer' => 'Ingrese solo numeros',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function save(){
        $data = $this->validate();

        dd($data);
    }

    public function mount(){
        $this->fecha = Carbon::now()->format('d/m/Y');
    }
    public function render()
    {
        return view('livewire.modulo-desespinado.home-desespinado');
    }
}
