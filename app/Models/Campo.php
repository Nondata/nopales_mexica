<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
