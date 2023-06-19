<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Campo extends Model
{
    use HasFactory;
    protected $fillable = [
        'encargado',
        'fecha',
        'actividad_a_realizar',
        'cantidad_cajas',
        'presentacion',
        'zona_de_corte',
        'trazabilidad',
        'realizo'
    ];
}
