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
    
    public function submitAccess(){
        $informacion = $this->validate([
            'nombre'=> 'required',
            'password' => 'required',
        ]);
        
        
        // User::create([
        //     'nombre' => $this->nombre,
        //     'apellidos' => 'jurado hernadez',
        //     'area' => '4',
        //     'cargo' => 'encargado',
        //     'password' => Hash::make($this->password),
        // ]);
            
        if(Auth::attempt(['nombre' => $this->nombre, 'password'=> $this->password ] ) ){
                
            $this->password = Hash::make($this->password);
            $this->info = User::where('nombre' , $this->nombre)->first();
            //dd($this->info);
            if($this->info['area'] == 1){
                return redirect()->route('recepcion', ['nombre' => $this->nombre]);
            }else if($this->info['area'] == 2){ 
                return redirect()->route('pelado', ['nombre' => $this->nombre]);
            }else if($this->info['area'] == 3){
                return redirect()->route('coccion', ['nombre' => $this->nombre]);
            }else if($this->info['area'] == 4){
                return redirect()->route('almacen', ['nombre' => $this->nombre]);
            }else{
                return redirect(route('admin', ['nombre' => $this->nombre]));
            }
        }
    }
    public function render()
    {
        return view('livewire.index-login');
    }
}
