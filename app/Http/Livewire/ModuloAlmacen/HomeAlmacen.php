<?php

namespace App\Http\Livewire\ModuloAlmacen;

use App\Models\Empaque;
use App\Models\Producto;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeAlmacen extends Component
{   
    public $fecha;
    public $nombre_empaco;
    public $producto;
    public $color_sello;
    public $cajas;
    public $piezas;
    public $fugas;
    public $burbuja;
    public $sello;
    public $rechazo;
    public $lote;
    public $caducidad;
    public $observaciones;

    public $tipo_producto;

    protected $rules=[
        'nombre_empaco' => 'required',
        'producto' => 'required',
        'color_sello' => 'required',
        'cajas' => 'required|integer',
        'piezas' => 'required|integer',
        'fugas' => 'required|integer',
        'burbuja' => 'required|integer',
        'sello' => 'required|integer',
        'rechazo' => 'required|integer',
        'lote' => 'required',
        'caducidad' => 'required',
        'observaciones' => ''
    ];

    protected $messages = [
        'nombre_empaco.required' => 'Campo obligatorio',
        'producto.required' => 'Producto obligatorio',
        'color_sello.required' => 'Color obligatorio',
        'cajas.required' => 'Campo obligatorio',
        'cajas.integer' => 'Solo numeros',
        'piezas.required' => 'Campo obligatorio',
        'piezas.integer' => 'Solo numeros',
        'fugas.required' => 'Campo obligatorio',
        'fugas.integer' => 'Solo numeros',
        'burbuja.required' => 'Campo obligatorio',
        'burbuja.integer' => 'Solo numeros',
        'sello.required' => 'Campo obligatorio',
        'sello.integer' => 'Solo numeros',
        'rechazo.required' => 'Campo obligatorio',
        'rechazo.integer' => 'Solo numeros',
        'lote.required' => 'Campo obligatorio',
        'caducidad.required' => 'Campo obligatorio' //Esto ultimo se debe de aclarar 
    ];

    public function cerrar_sesion()
    {
        Auth::logout();
        return redirect()->to('/');
    }
    public function hydrate() {
        $this->emit('select2');
    }
    public function updatedProducto($value){
        $this->tipo_producto = Producto::where('nombre_de_producto', '=', $value)->first();

        $this->lote = $this->tipo_producto['numero_de_serie'] . ' ' . Carbon::now()->dayOfYear() . ' ' . Carbon::now()->format('y');
        $this->caducidad = Carbon::now()->addDays($this->tipo_producto['tiempo_estimado_de_consumo'])->format('d/m/Y');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function save(){
        $data = $this->validate();
        
        $data = Empaque::create([
            'encargado' => session('usuario'),
            'fecha' => $this->fecha,
            'nombre_empaco' => $this->nombre_empaco,
            'tipo_producto' => $this->producto,
            'color' => $this->color_sello,
            'cajas' => $this->cajas,
            'piezas' => $this->piezas,
            'fugas' => $this->fugas,
            'burbuja' => $this->burbuja,
            'sello' => $this->sello,
            'rechazo' => $this->rechazo,
            'lote' => $this->lote,
            'caducidad' => $this->caducidad,
            'observaciones' => $this->observaciones
        ]);

        $sumaCaja = $this->tipo_producto['cajas'] + $this->cajas;
        $sumaPieza1 = $this->piezas - $this->fugas - $this->burbuja - $this->sello - $this->rechazo;
        $sumaPieza = $this->tipo_producto['piezas'] + $sumaPieza1;
        $piezasTotal = ($this->tipo_producto['piezas_por_caja'] * $this->cajas) + $sumaPieza + $this->tipo_producto['cantidad'] -1; 

        //dd($piezasTotal);
        Producto::where('id', $this->tipo_producto->id)
        ->update([
            'cajas' => $sumaCaja,
            'piezas' => $sumaPieza,
            'cantidad' => $piezasTotal,
        ]);
        if($data){
            session()->flash('message', 'Registro ingresado correctamente, 
            siga ingresando otro registro, de lo contrario, cierre sesión');
        }else {
            session()->flash('error', 'Error al ingresar la informacion, 
            comuniquese con el administrador');
        }
        $this->clean();
    }
    public function clean(){
        $this->nombre_empaco = null;
        $this->producto = null;
        $this->color_sello = null;
        $this->cajas = null;
        $this->piezas = null;
        $this->fugas = null;
        $this->burbuja = null;
        $this->sello = null;
        $this->rechazo = null;
        $this->lote = null;
        $this->caducidad = null;
        $this->observaciones = null;
    }
    public function mount(){
        $this->fecha = Carbon::now()->format('d/m/Y');
    }
    public function render()
    {
        $catalogo = Producto::all();
        return view('livewire.modulo-almacen.home-almacen', compact('catalogo'));       
    }
}
