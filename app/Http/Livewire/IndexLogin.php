<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class IndexLogin extends Component
{   
    public $user;
    public $nombre;
    public $password;
    public $info;
    public $dato;
    public $caducidad;
    public $anio;
    public $caducidad1;

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

        if (Auth::attempt(['nombre' => $this->nombre, 'password' => $this->password])) {
            $this->info = User::where('nombre', $this->nombre)->first();
            session(['usuario' => $this->info['nombre'], 'area' => $this->info['area']]);
            if ($this->info['area'] == 'campo') {
                return redirect()->intended('campo');
            } else if ($this->info['area'] == 'desespinado') {
                return redirect()->intended('desespinado');
            } else if ($this->info['area'] == 'produccion') {
                return redirect()->intended('produccion');
            } else if ($this->info['area'] == 'empaque') {
                return redirect()->intended('empaque');
            } else if ($this->info['area'] == 'recepcion') {
                return redirect()->intended('recepcion');
            } else if ($this->info['area'] == 'administracion') {
                return redirect()->intended('/home');
            }
        }
    }
    public function mount(){
        $this->dato = Carbon::now()->dayOfYear();
        $this->caducidad = Carbon::now()->addMonths(18)->format('d-m-Y');
        $this->anio = Carbon::now()->format('y');
        $this->caducidad1 = Carbon::now()->addDays(400)->format('d-m-Y');
    }
    public function render()
    {
        return view('livewire.index-login');
    }
}
