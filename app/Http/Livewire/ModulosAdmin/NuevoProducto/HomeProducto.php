<?php

namespace App\Http\Livewire\ModulosAdmin\NuevoProducto;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class HomeProducto extends Component
{   
    use WithPagination;
    public $query;
    public Producto $producto;

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }
    public function delete($id){
        Producto::destroy($id);
    }
    public function render()
    {
        if(strlen($this->query)>0){
            $items = Producto::search($this->query)->get();
        }else{
            $items = Producto::paginate(7);
        }
        return view('livewire.modulos-admin.nuevo-producto.home-producto', compact('items') );
    }
}
