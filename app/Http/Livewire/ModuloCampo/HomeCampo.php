<?php

namespace App\Http\Livewire\ModuloCampo;

use App\Models\Campo;
use Carbon\Carbon;
use Livewire\Component;

class HomeCampo extends Component
{
    public $fecha;
    public $encargado = 'juan carlos';
    public $actividad_a_realizar = '';
    public $zona_de_corte;
    public $cantidad;
    public $realizo;
    public $presentacion;
    public $codigo_trazabilidad='';

    protected $rules = [
        'fecha' => '',
        'actividad_a_realizar' => 'required',
        'cantidad' => 'required|integer',
        'presentacion' => 'required',
        'zona_de_corte' => 'required',
        'codigo_trazabilidad' => '',
        'realizo' => 'required',
    ];
    protected $messages=[
        'actividad_a_realizar.required' => 'Seleccione la actividad',
        'cantidad.required' => 'Ingrese las cajas',
        'cantidad.integer' => 'ingrese solo numeros',
        'presentacion.required' => 'Seleccione el tamaño',
        'zona_de_corte.required' => 'Seleccione corte',
        'realizo.required' => 'Seleccione personal',
    ];
    public function zona(){
        if($this->actividad_a_realizar == 'cosecha'){
            $this->codigo_trazabilidad .= $this->zona_de_corte;
        }
    }
    public function seleccion(){
        if($this->actividad_a_realizar == 'cosecha'){
            $this->codigo_trazabilidad = '09/009/ NM /11382  '. $this->fecha .'  /';
        }else{
            $this->codigo_trazabilidad='';
        }
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $data = $this->validate();

        Campo::create(
            [
                'encargado' => $this->encargado,
                'fecha' => $this->fecha,
                'actividad_a_realizar' => $this->actividad_a_realizar,
                'cantidad_cajas' => $this->cantidad,
                'presentacion' => $this->presentacion,
                'zona_de_corte' => $this->zona_de_corte,
                'trazabilidad' => $this->codigo_trazabilidad,
                'realizo' => $this->realizo
            ]
        );
        session()->flash('message', 'Actividad registrada correctamente');
        //dd($data);
    }
    public function mount()
    {
        $this->fecha = Carbon::now()->format('d/m/Y');
        //$this->codigo_trazabilidad .= $this->fecha . '  /';
    }
    public function render()
    {
        //$this->codigo_trazabilidad .= $this->zona_de_corte;
        return view('livewire.modulo-campo.home-campo');
    }
}
