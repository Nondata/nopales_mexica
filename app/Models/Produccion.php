<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'encargado',
        'fecha',
        'num_personas',
        'gas_inicio',
        'gas_final',
        'kg_nopal',
        'tamano_nopal',
        'realizaron_lavado',
        'num_marmitas',
        'temperatura',
        'color_sello',
        'realizaron_sellado',
        'choque_termico',
        'gramaje_producto',
        'piezas',
        'kg_merma',
        'observaciones'
    ];
}
