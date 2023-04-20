<?php

namespace App\Http\Livewire\ModuloAlmacen;

use App\Models\Empaque;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeAlmacen extends Component
{   
    public $fecha;
    public $nombre_empaco;
    public $producto;
    public $color_sello;
    public $cajas;
    public $piezas;
    public $fugas;
    public $burbuja;
    public $sello;
    public $rechazo;
    public $lote;
    public $caducidad;
    public $observaciones;

    public $catalogo = [
        'Bolsa con Nopal en Salmuera 500g', //nopal en salmuera
        'Bolsa con Nopal Entero en Salmuera 500g',
        'Bolsa con Nopal en Salmuera 1kg',
        'Bolsa con Nopal Entero en Salmuera 1kg',
        'Bolsa con Nopal en Salmuera 1.2kg',
        'Bolsa con Nopal en Salmuera 3kg',
        'Frasco con Nopal en Salmuera 330g', //aqui empieza el frasco
        'Frasco con Nopal en Salmuera 460g',
        'Frasco con Nopal Cambray en Salmuera 460g',
        'Frasco con Nopal en Salmuera 940g',
        'Frasco con Nopal Entero en Salmuera 940g',
        'Frasco con Nopal Entero en Salmuera 1840g',
        'Bolsa con Nopal en Escabeche 280g', //Bitacora escabeche
        'Bolsa con Nopal en Escabeche 500g',
        'Bolsa con Nopal en Escabeche 1kg',
        'Frasco con Nopal en Escabeche 330g',
        'Frasco con Nopal en Escabeche 460g',
        'Frasco con Nopal Baby en Escabeche 460g',
        'Bolsa con Fibra de Nopal 100g', //bitacora fibra
        'Bolsa con Fibra de Nopal 400g',
        'Bolsa con Fibra de Nopal 500g',
        'Bolsa con Fibra de Nopal 1kg',
        'Bolsa con Fibra de Nopal 10kg',
        'Costal con Fibra de Nopal 25kg',
        'Bolsa con Dulce de Nopal deshidratado 25g', //bitacora dulce
        'Bolsa con Dulce de Nopal deshidratado enchilado 25g',
        'Bolsa con Dulce de Nopal deshidratado 80g',
        'Bolsa con Dulce de Nopal deshidratado enchilado 80g',
        'Bolsa con Dulce de Nopal deshidratado 100g',
        'Bolsa con Dulce de Nopal deshidratado enchilado 100g',
        'Bolsa con Dulce de Nopal deshidratado 1kg',
        'Bolsa con Dulce de Nopal deshidratado enchilado 1kg',
        'Bolsa con DUlce de Nopal deshidratado 10kg',
        'Bolsa con Dulce de Nopal deshidratado enchilado 10kg',
        'Charola con Dulce de Nopal deshidratado 150g',
        'Charola con DUlce de Nopal deshidratado enchilado 150g',
        'Bolsa con Mermelada de Nopal con Maracuya 200g', //bitacora mermeladas
        'Frasco con Mermelada de Nopal con Mracuya 310g',
        'Bolsa con Amaranto 125g', //bitacora amaranto
        'Bolsa con Amaranto 200g',
        'Bolsa con Amaranto 250g',
        'Bolsa con Harina de Amaranto 100g',
        'Bolsa con Harina de Amaranto 200g',
        'Bolsa con Harina de Amaranto 1kg',
        'Bolsa con Harina de Amaranto 10kg',
        'Costal con Harina de Amaranto 25kg',
        'Barrita de Amaranto 25g',
        'Barrita de Amaranto 30g'
    ];

    protected $rules=[
        'nombre_empaco' => 'required',
        'producto' => 'required',
        'color_sello' => 'required',
        'cajas' => 'required|integer',
        'piezas' => 'required|integer',
        'fugas' => 'required|integer',
        'burbuja' => 'required|integer',
        'sello' => 'required|integer',
        'rechazo' => 'required|integer',
        'lote' => 'required|integer',
        'caducidad' => 'required',
        'observaciones' => ''
    ];

    protected $messages = [
        'nombre_empaco.required' => 'Campo obligatorio',
        'producto.required' => 'Producto obligatorio',
        'color_sello.required' => 'Color obligatorio',
        'cajas.required' => 'Campo obligatorio',
        'cajas.integer' => 'Solo numeros',
        'piezas.required' => 'Campo obligatorio',
        'piezas.integer' => 'Solo numeros',
        'fugas.required' => 'Campo obligatorio',
        'fugas.integer' => 'Solo numeros',
        'burbuja.required' => 'Campo obligatorio',
        'burbuja.integer' => 'Solo numeros',
        'sello.required' => 'Campo obligatorio',
        'sello.integer' => 'Solo numeros',
        'rechazo.required' => 'Campo obligatorio',
        'rechazo.integer' => 'Solo numeros',
        'lote.required' => 'Campo obligatorio',
        'lote.integer' => 'Solo numeros',
        'caducidad.required' => 'Campo obligatorio' //Esto ultimo se debe de aclarar 
    ];
    public function cerrar_sesion()
    {
        Auth::logout();
        return redirect()->to('/');
    }
    public function hydrate() {
        $this->emit('select2');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function save(){
        $this->validate();
        
        $data = Empaque::create([
            'encargado' => session('usuario'),
            'fecha' => $this->fecha,
            'nombre_empaco' => $this->nombre_empaco,
            'tipo_producto' => $this->producto,
            'color' => $this->color_sello,
            'cajas' => $this->cajas,
            'piezas' => $this->piezas,
            'fugas' => $this->fugas,
            'burbuja' => $this->burbuja,
            'sello' => $this->sello,
            'rechazo' => $this->rechazo,
            'lote' => $this->lote,
            'caducidad' => $this->caducidad,
            'observaciones' => $this->observaciones
        ]);

        if($data){
            session()->flash('message', 'Registro ingresado correctamente, 
            siga ingresando otro registro, de lo contrario, cierre sesión');
        }else {
            session()->flash('error', 'Error al ingresar la informacion, 
            comuniquese con el administrador');
        }
        $this->clean();
    }
    public function clean(){
        $this->nombre_empaco = null;
        $this->producto = null;
        $this->color_sello = null;
        $this->cajas = null;
        $this->piezas = null;
        $this->fugas = null;
        $this->burbuja = null;
        $this->sello = null;
        $this->rechazo = null;
        $this->lote = null;
        $this->caducidad = null;
        $this->observaciones = null;
    }
    public function mount(){
        $this->fecha = Carbon::now()->format('d/m/Y');
    }
    public function render()
    {
        if(Auth::check()){
            return view('livewire.modulo-almacen.home-almacen');
        }else{
            return view('index');
        }
    }
}
