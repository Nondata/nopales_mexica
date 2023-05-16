<?php

namespace App\Http\Livewire\ModulosAdmin\NuevoProducto;

use App\Models\Producto;
use Livewire\Component;

class EditProducto extends Component
{
    public $producto;

    public function mount($producto)
    {
        $this->producto = $producto;
    }

    protected function rules(){
        return [
        //'producto.nombre_de_producto' => 'required|unique:productos,nombre_de_producto,'. optional($this->producto->nombre_de_producto)->id,
        'producto.nombre_de_producto' => 'required',
        'producto.cajas'=> 'required|integer',
        'producto.piezas' => 'required|integer',
        'producto.piezas_por_caja' => 'required|integer', 
        //'producto.numero_de_serie' => 'required|integer|max:1000|unique:productos,numero_de_serie'. optional($this->producto->numero_de_serie)->id,
        'producto.numero_de_serie' => 'required|integer|max:1000',
        'producto.tiempo_estimado_de_consumo' => 'required',
        'producto.cantidad' => 'required|integer'
        ];
    }

    protected $messages = [
        'producto.nombre_producto.required' => 'campo obligatorio',
        'producto.cajas.required' => 'Campo obligatorio',
        'producto.cajas.integer' => 'Solo ingrese numeros',
        'producto.piezas.required' => 'Campo obligatorio',
        'producto.piezas.integer' => 'Solo ingrese numeros',
        'producto.piezas_por_caja.required' => 'Campo obligatorio',
        'producto.piezas_por_caja.integer' => 'Solo ingrese numeros',
        'producto.num_serie.required' => 'Campo obligatorio',
        'producto.num_serie.integer' => 'Solo ingrese numeros',
        'producto.num_serie.max' => 'Maximo de 3 caracteres',
        'producto.tiempo_estimado_de_consumo.required' => 'Seleccione la fecha de caducidad',
        'producto.cantidad.required' => 'Campo obligatorio',
        'producto.cantidad.integer' => 'Solo ingrese numeros'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        $data = Producto::where('id', $this->producto->id)
            ->update([
                'nombre_de_producto' => $this->producto->nombre_de_producto,
                'cajas' => $this->producto->cajas,
                'piezas' => $this->producto->piezas,
                'piezas_por_caja' => $this->producto->piezas_por_caja,
                'numero_de_serie' => $this->producto->numero_de_serie,
                'tiempo_estimado_de_consumo' => $this->producto->tiempo_estimado_de_consumo,
                'cantidad' => $this->producto->cantidad
            ]);

        if ($data) {
            session()->flash('message', 'Producto Actualizado correctamente');
        } else {
            session()->flash('error', 'Hubo un error al actualizar, contacte con el administrador');
        }
    }
    public function render()
    {
        return view('livewire.modulos-admin.nuevo-producto.edit-producto');
    }
}
