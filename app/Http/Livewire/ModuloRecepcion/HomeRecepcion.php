<?php

namespace App\Http\Livewire\ModuloRecepcion;

use Carbon\Carbon;
use Livewire\Component;

class HomeRecepcion extends Component
{
    public $fecha;
    public $proveedor;
    public $tabla;
    public $kg_nopal;
    public $cajas;
    public $tamano;
    public $plagas;
    public $apariencia;
    public $color;
    public $olor;
    public $defectos;
    public $puntos_de_espinas;
    public $kg_merma;
    public $rechazo;
    public $observaciones;

    protected $rules = [
        'proveedor' => 'required',
        'tabla' => 'required',
        'kg_nopal' => 'required',
        'cajas' => 'required',
        'tamano' => 'required',
        'plagas' => 'required',
        'apariencia' => 'required',
        'color' => 'required',
        'olor' => 'required',
        'defectos' => 'required',
        'puntos_de_espinas' => 'required',
        'kg_merma' => 'required',
        'rechazo' => 'required',
        'observaciones' => '',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function save(){
        $data =$this->validate();

        dd($data);
    }
    public function mount(){
        $this->fecha = Carbon::now()->format('d/m/Y');
    }
    public function render()
    {
        return view('livewire.modulo-recepcion.home-recepcion');
    }
}
