<?php

namespace App\Http\Livewire\ModulosAdmin\NuevoTrabajador;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateUsuario extends Component
{
    public $nombre;
    public $apellidos;
    public $area;
    public $cargo;
    public $password;
    public $confirmPassword;

    protected $rules= [
        'nombre' => 'required|regex:/^[a-zA-z\s]+$/u',
        'apellidos' => 'required|regex:/^[a-zA-z\s]+$/u',
        'area' => 'required',
        'cargo' => 'required',
        'password' => 'required',
        'confirmPassword' => 'required|same:password'
    ];

    protected $messages=[
        'nombre.required' => 'Nombre obligatorio',
        'nombre.regex' => 'No ingrese numeros',
        'apellidos.required' => 'Apellidos obligatorios',
        'apellidos.regex' => 'No ingrese numeros',
        'area.required' => 'Area no seleccionada',
        'cargo.required' => 'Cargo no seleccionado',
        'password.required' => 'Contraseña obligatoria',
        'confirmPassword.required' => 'Confirme la contraseña',
        'confirmPassword.same' => 'Contraseñas no coinciden', 
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function resetInputs(){
        $this->nombre = '';
        $this->apellidos = '';
        $this->area = '';
        $this->cargo = '';
        $this->password = '';
        $this->confirmPassword = '';
    }

    public function submit(){
        $this->validate();
        
        $confirmData = User::create([
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'area' => $this->area,
            'cargo' => $this->cargo,
            'password' => Hash::make($this->password)
        ]);

        if($confirmData){
            session()->flash('message', 'Usuario registrado correctamente');
            $this->resetInputs();
        }else{
            session()->flash('error', 'Hubo un error al ingresar al usuario');
        }

    }
    public function render()
    {
        return view('livewire.modulos-admin.nuevo-trabajador.create-usuario');
    }
}
