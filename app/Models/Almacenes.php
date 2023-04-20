<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacenes extends Model
{
    use HasFactory;
    protected $fillable = [
        'encargado',
        'fecha',
        'nombre_empaco',
        'tipo_producto',
        'color',
        'cajas',
        'piezas',
        'fugas',
        'burbuja',
        'sello',
        'rechazo',
        'lote',
        'caducidad',
        'observaciones'
    ];
}
