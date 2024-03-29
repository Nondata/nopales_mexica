<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desespinado extends Model
{
    use HasFactory;

    protected $fillable = [
        'encargado',
        'fecha',
        'nombre',
        'kg_pelados',
        'piezas',
        'observaciones'
    ];
}
