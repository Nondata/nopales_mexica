<?php

namespace App\Http\Livewire\ModuloProduccion;

use App\Models\Produccion;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
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
    public $piezas;
    public $mermas;
    public $observaciones;

    protected $rules = [
        'num_personas' => 'required|integer',
        'gas_inicio' => 'required|integer',
        'gas_final' => 'required|integer',
        'kg_nopal' => 'required|integer',
        'tamano_nopal' => 'required',
        'personal_lavado' => 'required',
        'num_marmitas' => 'required|integer',
        'temperatura' => 'required|integer',
        'color_sellado' => 'required',
        'personal_sellado' => 'required',
        'validacion_choque' => 'required',
        'gramaje' => 'required',
        'piezas' => 'required|integer',
        'mermas' => 'required|integer',
        'observaciones' => '',
    ];
    protected $messages = [
        'num_personas.required' => 'Campo obligatorio',
        'num_personas.integer' => 'Solo ingrese numeros',
        'gas_inicio.required' => 'Campo obligatorio',
        'gas_inicio.integer' => 'Solo ingrese numeros',
        'gas_final.required' => 'Campo obligatorio',
        'gas_final.integer' => 'Solo ingrese numeros',
        'kg_nopal.required' => 'Campo obligatorio',
        'kg_nopal.integer' => 'Solo ingrese numeros',
        'tamano_nopal.required' => 'Seleccione el tamaño',
        'personal_lavado.required' => 'Seleccione al personal que lavo',
        'num_marmitas.required' => 'Campo obligatorio',
        'num_marmitas.integer' => 'Solo ingrese numeros',
        'temperatura.required' => 'Campo obligatorio',
        'temperatura.integer' => 'Solo ingrese numeros',
        'color_sellado.required' => 'Seleccione el color del sellado',
        'personal_sellado.required' => 'Seleccione al personal que sello',
        'validacion_choque.required' => 'Campo obligatorio',
        'gramaje.required' => 'Campo obligatorio',
        'piezas.required' => 'Campo obligatorio',
        'piezas.integer' => 'Solo ingrese numeros',
        'mermas.required' => 'Campo obligatorio',
        'mermas.integer' => 'Solo numeros enteros',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function save(){
        $this->validate();

        $data = Produccion::Create([
            'encargado' => session('usuario'),
            'fecha' => $this->fecha,
            'num_personas' => $this->num_personas,
            'gas_inicio' => $this->gas_inicio,
            'gas_final' => $this->gas_final,
            'kg_nopal' => $this->kg_nopal,
            'tamano_nopal' => $this->tamano_nopal,
            'realizaron_lavado' => $this->personal_lavado,
            'num_marmitas' => $this->num_marmitas,
            'temperatura' => $this->temperatura,
            'color_sello' => $this->color_sellado,
            'realizaron_sellado' => $this->personal_sellado,
            'choque_termico' => $this->validacion_choque,
            'gramaje_producto' => $this->gramaje,
            'piezas' => $this->piezas,
            'kg_merma' => $this->mermas,
            'observaciones' => $this->observaciones
        ]);

        if($data){
            session()->flash('message', 'Ingresado correctamente, 
            siga ingresando otro registro, de lo contrario, cierre sesión');
        }else{
            session()->flash('error', 'Error al ingresar la información
            por favor comuniquese con el administrador');
        }
        $this->clear();
    }
    public function clear(){
        $this->num_personas = null;
        $this->gas_inicio = null;
        $this->gas_final= null;
        $this->kg_nopal = null;
        $this->tamano_nopal = null;
        $this->personal_lavado = null;
        $this->num_marmitas = null;
        $this->temperatura = null;
        $this->color_sellado = null;
        $this->personal_sellado = null;
        $this->validacion_choque = null;
        $this->gramaje = null;
        $this->mermas = null;
        $this->observaciones = null;
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

    public function cerrar_sesion(){
        Auth::logout();
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.modulo-produccion.home-produccion');
    }
}
