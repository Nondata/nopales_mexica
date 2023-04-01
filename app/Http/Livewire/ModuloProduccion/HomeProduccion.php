<?php

namespace App\Http\Livewire\ModuloProduccion;

use Carbon\Carbon;
use Livewire\Component;

class HomeProduccion extends Component
{
    public $fecha;
    public $num_personas;
    public $gas_inicio;
    public $gas_final;
    public $kg_nopal;
    public $tamano_nopal;
    public $personal_lavado;
    public $num_marmitas;
    public $temperatura;
    public $color_sellado;
    public $personal_sellado = '';
    public $validacion_choque;
    public $gramaje;
    public $mermas;
    public $observaciones;

    protected $rules = [
        'num_personas' => 'required|integer',
        'gas_inicio' => 'required|integer',
        'gas_final' => 'required|integer',
        'kg_nopal' => 'required|integer',
        'tamano_nopal' => 'required',
        'personal_lavado' => 'required',
        'num_marmitas' => 'required',
        'temperatura' => 'required|integer',
        'color_sellado' => 'required',
        'personal_sellado' => 'required',
        'validacion_choque' => 'required',
        'gramaje' => 'required',
        'mermas' => 'required|integer',
        'observaciones' => '',
    ];
    protected $messages = [

    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function save(){
        $this->validate();
    }
    public function mount(){
        $this->fecha = Carbon::now()->format('d/m/Y');
    }

    public function encargado_sellado(){
        if($this->color_sellado == 'rojo'){
            $this->personal_sellado = 'edgar';
        }else if($this->color_sellado == 'amarillo'){
            $this->personal_sellado = 'andy';
        }else if($this->color_sellado == 'azul'){
            $this->personal_sellado = 'fernando';
        }else if($this->color_sellado == 'verde'){
            $this->personal_sellado = 'jocelyn';
        }else if($this->color_sellado == 'blanco'){
            $this->personal_sellado = 'jesus';
        }else if($this->color_sellado == 'negro'){
            $this->personal_sellado = 'Zami';
        }
    }

    public function render()
    {
        return view('livewire.modulo-produccion.home-produccion');
    }
}
