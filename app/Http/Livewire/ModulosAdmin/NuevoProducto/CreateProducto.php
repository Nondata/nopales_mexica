<?php

namespace App\Http\Livewire\ModulosAdmin\NuevoProducto;

use App\Models\Producto;
use Livewire\Component;

class CreateProducto extends Component
{   
    public $nombre_producto;
    public $cajas;
    public $piezas;
    public $piezas_por_caja;
    public $num_serie;
    public $tiempo_caducidad;
    public $cantidad;


    protected function rules(){
        return [
        'nombre_producto' => 'required|unique:productos,nombre_de_producto,'. optional($this->nombre_producto)->id,
        'cajas' => 'required|integer',
        'piezas' => 'required|integer',
        'piezas_por_caja' => 'required|integer',
        'num_serie' => 'required|integer|max:1000|unique:productos,numero_de_serie,'. optional($this->num_serie)->id,
        'tiempo_caducidad' => 'required',
        'cantidad'=> 'required|integer'
        ];
    }

    protected $messages = [
        'nombre_producto.required' => 'campo obligatorio',
        'nombre_producto.unique' => 'Producto ya existente',
        'cajas.required' => 'Campo obligatorio',
        'cajas.integer' => 'Solo ingrese numeros',
        'piezas.required' => 'Campo obligatorio',
        'piezas.integer'=> 'Solo ingrese numeros',
        'piezas_por_caja.required' => 'Campo obligatorio',
        'piezas_por_caja.integer' => 'Solo ingrese numeros',
        'num_serie.required' => 'Campo obligatorio',
        'num_serie.integer' => 'Solo ingrese numeros',
        'num_serie.unique' => 'Numero de serie ya existente',
        'num_serie.max' => 'Maximo de 3 caracteres',
        'tiempo_caducidad.required' => 'Seleccione la fecha de caducidad',
        'cantidad.required' => 'Campo obligatorio',
        'cantidad.integer' => 'Solo ingrese numeros'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function clean(){
        $this->nombre_producto = null;
        $this->cajas = null;
        $this->piezas = null;
        $this->piezas_por_caja = null;
        $this->num_serie = null;
        $this->tiempo_caducidad = null;
        $this->cantidad = null;
    }

    public function submit(){
        $data = $this->validate();

        
        $data = Producto::create([
            'nombre_de_producto' => $this->nombre_producto,
            'cajas' => $this->cajas,
            'piezas' => $this->piezas,
            'piezas_por_caja' => $this->piezas_por_caja,
            'cantidad' => $this->cantidad,
            'numero_de_serie' => $this->num_serie,
            'tiempo_estimado_de_consumo' => $this->tiempo_caducidad
        ]);
        
        if($data){
            session()->flash('message', 'Producto ingresado correctamente');
        }else{
            session()->flash('error', 'Hubo un error al ingresar el producto, contacte con el administrador');
        }
        $this->clean();
    }
    public function render()
    {
        return view('livewire.modulos-admin.nuevo-producto.create-producto');
    }
}
