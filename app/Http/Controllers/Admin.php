<?php

namespace App\Http\Controllers;

use App\Exports\ReporteGeneral;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Admin extends Controller 
{
    public function index(){
        return view('index');
    }
    public function home(){
        return view('livewire.modulos-admin.dashboard');
    }
    public function nuevo_trabajador(){
        return view('livewire.modulos-admin.nuevo-trabajador.dashboard');
    }

    public function edit(User $user){
        return view('livewire.modulos-admin.edit', compact('user'));
    }

    public function campo(){
        return view('livewire.modulo-campo.home');
    }
    public function lista_campo(){
        return view('livewire.modulo-campo.lista-campo.home');
    }
    public function desespinado(){
        return view('livewire.modulo-desespinado.home');
    }
    public function lista_desespinado(){
        return view('livewire.modulo-desespinado.lista-desespinado.home');
    }
    public function produccion(){
        return view('livewire.modulo-produccion.home');
    }
    public function lista_produccion(){
        return view('livewire.modulo-produccion.lista-produccion.home');
    }
    public function empaque(){
        return view('livewire.modulo-almacen.home');
    }
    public function lista_empaque(){
        return view('livewire.modulo-almacen.lista-almacen.home');
    }
    
    public function recepcion(){
        return view('livewire.modulo-recepcion.home');
    }
    public function lista_recepcion(){
        return view('livewire.modulo-recepcion.lista-recepcion.home');
    }

    public function producto(){
        return view('livewire.modulos-admin.nuevo-producto.dashboard');
    }
    public function nuevo_producto(){
        return view('livewire.modulos-admin.nuevo-producto.home-create-producto');
    }
    public function edit_producto(Producto $producto){
        return view('livewire.modulos-admin.nuevo-producto.home-editar-producto', compact('producto'));
    }

    public function salida_producto(){
        return view('livewire.modulos-admin.salida.home');
    }
    public function exportarDatos(){
        return Excel::download(new ReporteGeneral, 'datos.xlsx');
    }
}
