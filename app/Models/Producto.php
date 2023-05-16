<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Producto extends Model
{
    use HasFactory, Searchable, HasApiTokens, Notifiable;
    protected $fillable = [
        'nombre_de_producto',
        'cajas',
        'piezas',
        'piezas_por_caja',
        'cantidad',
        'numero_de_serie',
        'tiempo_estimado_de_consumo'
    ];

    public function toSearchableArray(){
        return [
            'id' => $this->id,
            'nombre_de_producto' => $this->nombre_producto,
        ];
    }
}
