<?php

namespace App\Http\Livewire\ModuloDesespinado;

use App\Models\Desespinado;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
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
        $this->validate();

        $data = Desespinado::Create([
            'encargado' => session('usuario'),
            'fecha' => $this->fecha,
            'nombre' => $this->nombre,
            'kg_pelados' => $this->kg_pelado,
            'piezas' => $this->piezas_peladas,
            'observaciones' => $this->observaciones
        ]);
        if($data){
            session()->flash('message', 'Ingresado correctamente, 
            siga ingresando otro registro, de lo contrario, cierre sesión');
        }else{
            session()->flash('error', 'Error al ingresar la información
            por favor comuniquese con el administrador');
        }
        $this->clear();
    }

    public function cerrar_sesion(){
        Auth::logout();
        return redirect()->to('/');
    }
    public function clear(){
        $this->nombre = null;
        $this->kg_pelado = null;
        $this->piezas_peladas = null;
        $this->observaciones = null;
    }

    public function mount(){
        $this->fecha = Carbon::now()->format('d/m/Y');
    }
    public function render()
    {
        return view('livewire.modulo-desespinado.home-desespinado');
    }
}
