<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepcion extends Model
{
    use HasFactory;

    protected $fillable = [
        'encargado',
        'fecha',
        'proveedor',
        'tabla',
        'kg_nopal',
        'num_cajas',
        'tamanio',
        'plagas',
        'apariencia',
        'color_verde',
        'olor',
        'defectos',
        'desespinados',
        'kg_merma',
        'rechazo_total',
        'observaciones',
    ];
}
