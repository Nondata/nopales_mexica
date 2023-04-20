<?php

namespace App\Http\Livewire\ModuloRecepcion;

use App\Models\Recepcion;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PhpParser\Node\Expr\NullsafeMethodCall;

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
        'kg_nopal' => 'required|integer',
        'cajas' => 'required|integer',
        'tamano' => 'required',
        'plagas' => 'required',
        'apariencia' => 'required',
        'color' => 'required',
        'olor' => 'required',
        'defectos' => 'required',
        'puntos_de_espinas' => 'required',
        'kg_merma' => 'required|integer',
        'rechazo' => 'required',
        'observaciones' => '',
    ];
    protected $messages = [
        'proveedor.required' => 'Campo obligatorio',
        'tabla.required' => 'Escriba el nombre de la tabla',
        'kg_nopal.required' => 'Campo obligatorio',
        'kg_nopal' => 'Solo numeros',
        'cajas.required' => 'Campo obligatorio',
        'cajas.integer' => 'Solo numeros enteros',
        'tamano.required' => 'Seleccione tamaño',
        'plagas.required' => 'Seleccione alguna opcion',
        'apariencia.required' => 'Seleccione alguna opcion',
        'color.required' => 'Seleccione alguna opcion',
        'olor.required' => 'Seleccione alguna opcion',
        'defectos.required' => 'Seleccione alguna opcion',
        'puntos_de_espinas.required' => 'Seleccione alguna opcion',
        'kg_merma.required' => 'Campo obligatorio',
        'kg_merma.integer' => 'Solo numeros enteros',
        'rechazo.required' => 'Seleccione alguna opcion',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function save(){
        $data =$this->validate();

        Recepcion::create([
            'encargado' => session('usuario'),
            'fecha' => $this->fecha,
            'proveedor' => $this->proveedor,
            'tabla' => $this->tabla,
            'kg_nopal' => $this->kg_nopal,
            'num_cajas' => $this->cajas,
            'tamanio' => $this->tamano,
            'plagas' => $this->plagas,
            'apariencia' => $this->apariencia,
            'color_verde' => $this->color,
            'olor' => $this->olor,
            'defectos' => $this->defectos,
            'desespinados' => $this->puntos_de_espinas,
            'kg_merma' => $this->kg_merma,
            'rechazo_total' => $this->rechazo,
            'observaciones' => $this->observaciones
        ]);

        if($data){
            session()->flash('message', 'Ingresado correctamente, siga ingresando,
            o de lo contrario, cierre sesión');
        }else{
            session()->flash('error', 'Hubo un error al ingresar la información, por favor
            comuniquese con el administrador');
        }
        $this->clear();
    }
    public function cerrar_sesion(){
        Auth::logout();
        redirect()->to('/');
    }
    public function clear(){
        $this->proveedor = null;
        $this->tabla = null;
        $this->kg_nopal = null;
        $this->cajas = null;
        $this->tamano = null;
        $this->plagas = null;
        $this->apariencia = null;
        $this->color = null;
        $this->olor = null;
        $this->defectos = null;
        $this->puntos_de_espinas = null;
        $this->kg_merma = null;
        $this->rechazo = null;
        $this->observaciones = null;
    }
    public function mount(){
        $this->fecha = Carbon::now()->format('d/m/Y');
    }
    public function render()
    {
        return view('livewire.modulo-recepcion.home-recepcion');
    }
}
