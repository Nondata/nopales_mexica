<?php

namespace App\Http\Livewire\ModulosAdmin\Salida;

use App\Models\Producto;
use App\Models\Salida;
use Carbon\Carbon;
use Livewire\Component;

class HomeSalida extends Component
{   
    public $fecha;
    public $cliente;
    public $piezas;
    public $producto;
    public $lote;
    public $caducidad;

    public $piezas_totales;
    public $producto_seleccionado;
    public $resultado;

    protected $rules = [
        'cliente' => 'required',
        'piezas' => 'required|integer',
        'producto' => 'required',
        'lote' => 'required',
        'caducidad' => 'required',
    ];

    protected $messages= [
        'cliente.required' => 'Campo obligatorio',
        'piezas.required' => 'Campo obligatorio',
        'producto.required' => 'Campo obligatorio',
        'piezas.integer' => 'Ingrese solo numeros',
        'lote.required' => 'Campo obligatorio',
        'caducidad.required' => 'Campo obligatorio',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function guardar(){
        $this->validate();

        $data = Salida::create([
            'fecha' => $this->fecha,
            'cliente' => $this->cliente,
            'producto' => $this->producto,
            'piezas' => $this->piezas,
            'lote' => $this->lote,
            'caducidad' => $this->caducidad,
        ]);

        $this->resultado = $this->producto_seleccionado['cantidad'] - $this->piezas ;

        Producto::where('id', $this->producto_seleccionado->id)
        ->update([
            'cantidad' => $this->resultado,
        ]);

        if($data){
            session()->flash('message', 'Registrado correctamente');
            session()->flash('piezas', 'El total de piezas restantes es de ' . $this->resultado);
        }else{
            session()->flash('error', 'Hubo un error al ingresar el registro');
        }
        $this->clean();
    }

    public function updatedProducto($value){
        $this->producto_seleccionado = Producto::where('nombre_de_producto', '=', $value)->first();
        $this->piezas_totales = $this->producto_seleccionado['cantidad'];
    }
    public function clean(){
        $this->cliente = null;
        $this->piezas = null;
        $this->producto = null;
        $this->lote = null;
        $this->caducidad = null;
    }

    public function mount(){
        $this->fecha = Carbon::now()->format('d/m/Y');
    }
    public function render()
    {   
        $catalogo = Producto::all();
        return view('livewire.modulos-admin.salida.home-salida', compact('catalogo'));
    }
}
