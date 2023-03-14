<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class IndexLogin extends Component
{
    public $user;
    public $nombre;
    public $password;
    public $info;

    protected $messages = [
        'nombre.required' => 'Nombre de usuario requerido',
        'password.required' => 'Password obligatorio',
    ];

    public function updated($property)
    {
        $this->validateOnly($property, [
            'nombre' => 'required',
            'password' => 'required',
        ]);
    }

    public function submitAccess()
    {
        $informacion = $this->validate([
            'nombre' => 'required',
            'password' => 'required',
        ]);


        // User::create([
        //     'nombre' => $this->nombre,
        //     'apellidos' => 'ayala otero',
        //     'area' => 'administracion',
        //     'cargo' => 'administrador',
        //     'password' => Hash::make($this->password),
        // ]);

        if (Auth::attempt(['nombre' => $this->nombre, 'password' => $this->password])) {

            $this->password = Hash::make($this->password);
            $this->info = User::where('nombre', $this->nombre)->first();
            //dd($this->info);
            session(['usuario' => $this->info['nombre'], 'area' => $this->info['area']]);
            if ($this->info['area'] == 'campo') {
                return redirect()->intended('campo');
            } else if ($this->info['area'] == 'desespinado') {
                return redirect()->intended('desespinado');
            } else if ($this->info['area'] == 'produccion') {
                return redirect()->intended('produccion');
            } else if ($this->info['area'] == 'almacen') {
                return redirect()->intended('almacen');
            } else if ($this->info['area'] == 'recepcion') {
                return redirect()->intended('recepcion');
            } else if ($this->info['area'] == 'administracion') {
                return redirect()->intended('home');
            }
        }
    }
    public function render()
    {
        return view('livewire.index-login');
    }
}
