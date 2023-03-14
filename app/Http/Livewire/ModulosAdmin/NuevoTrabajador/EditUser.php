<?php

namespace App\Http\Livewire\ModulosAdmin\NuevoTrabajador;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class EditUser extends Component
{
    public $user;
    public $confirmPassword;
    public $password1;

    public function mount($user)
    {
        $this->user = $user;
    }

    protected $rules = [
        'user.nombre' => 'required|regex:/^[a-zA-z\s]+$/u',
        'user.apellidos' => 'required|regex:/^[a-zA-z\s]+$/u',
        'user.area' => 'required',
        'user.cargo' => 'required',
        'password1' => '',
        //'user.password' => 'required',
        //'confirmPassword' => 'required|same:user.password'
        'confirmPassword' => 'same:password1'
    ];

    protected $messages = [
        'user.nombre.required' => 'Nombre obligatorio',
        'user.nombre.regex' => 'No ingrese numeros',
        'user.apellidos.required' => 'Apellidos obligatorios',
        'user.apellidos.regex' => 'No ingrese numeros',
        'user.area.required' => 'Area no seleccionada',
        'user.cargo.required' => 'Cargo no seleccionado',
        //'user.password.required' => 'Contraseña obligatoria',
        //'confirmPassword.required' => 'Confirme la contraseña',
        'confirmPassword.same' => 'Contraseñas no coinciden',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function save()
    {
        $this->validate();
        //dd($data);
        
        if($this->password1 != null){
            User::where('id', $this->user->id)
                ->update([
                    'nombre' => $this->user->nombre,
                    'apellidos' => $this->user->apellidos,
                    'area' => $this->user->area,
                    'cargo' => $this->user->cargo,
                    'password' => Hash::make($this->password1)
                ]);
        }else{
            User::where('id', $this->user->id)
                ->update([
                    'nombre' => $this->user->nombre,
                    'apellidos' => $this->user->apellidos,
                    'area' => $this->user->area,
                    'cargo' => $this->user->cargo,
                ]);
        }
        session()->flash('message', 'Usuario actualizado correctamente');
        //$this->user->save();
    }
    public function render()
    {
        return view('livewire.modulos-admin.nuevo-trabajador.edit-user');
    }
}
