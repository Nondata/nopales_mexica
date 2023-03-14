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
    public function nuevo_trabajador(){
        return view('livewire.modulos-admin.nuevo-trabajador.dashboard');
    }

    public function edit(User $user){
        return view('livewire.modulos-admin.edit', compact('user'));
    }

    public function campo(){
        return view('livewire.modulo-campo.home');
    }
    public function desespinado(){
        return view('livewire.modulo-desespinado.home');
    }
    public function produccion(){
        return view('livewire.modulo-produccion.home');
    }
    public function almacen(){
        return view('livewire.modulo-almacen.home');
    }
    public function recepcion(){
        return view('livewire.modulo-recepcion.home');
    }
}
