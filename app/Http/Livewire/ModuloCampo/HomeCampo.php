<?php

namespace App\Http\Livewire\ModuloCampo;

use App\Models\Campo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeCampo extends Component
{
    public $fecha;
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

    public function cerrar_sesion(){
        Auth::logout();
        return redirect()->to('/');
    }
    public function clear(){
        $this->actividad_a_realizar = null;
        $this->cantidad = null;
        $this->presentacion = null;
        $this->zona_de_corte= null;
        $this->codigo_trazabilidad = null;
        $this->realizo = null;
    }
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
        $this->validate();

        $data =Campo::create(
            [
                'encargado' => session('usuario'),
                'fecha' => $this->fecha,
                'actividad_a_realizar' => $this->actividad_a_realizar,
                'cantidad_cajas' => $this->cantidad,
                'presentacion' => $this->presentacion,
                'zona_de_corte' => $this->zona_de_corte,
                'trazabilidad' => $this->codigo_trazabilidad,
                'realizo' => $this->realizo
            ]
        );
        //dd($data);

        if($data){
            session()->flash('message', 'Actividad registrada correctamente, si va a registrar nueva informacion, continue, de lo contrario cierre sesion');
        }else {
            session()->flash('error', 'Error al ingresar la informacion, comuniquese con el administrador');
        }
        $this->clear();
    }
    public function mount()
    {
        $this->fecha = Carbon::now()->format('d/m/Y');
    }
    public function render()
    {
        return view('livewire.modulo-campo.home-campo');
    }
}
