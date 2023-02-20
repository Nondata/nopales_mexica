<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index(){
        return view('index');
    }

    public function home(){
        return view('livewire.modulos-admin.dashboard');
    }

    public function recepcion(User $user){
        return view('livewire.modulos-recepcion.index', compact('user'));
    }

    public function pelado(User $user){
        return view('livewire.modulos-pelado.index', compact('user'));
    }

    public function coccion(User $user){
        return view('livewire.modulos-coccion.index', compact('user'));
    }

    public function almacen(User $user){
        return view('livewire.modulos-almacen.index', compact('user'));
    }
    
    public function nuevo_trabajador(){
        return view('livewire.modulos-admin.nuevo-trabajador.dashboard');
    }
}
