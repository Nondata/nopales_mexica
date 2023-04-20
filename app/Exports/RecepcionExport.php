<?php

namespace App\Exports;

use App\Models\Recepcion;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

class RecepcionExport implements FromView, WIthTitle
{
    public function view(): View
    {
        return view('vistasExport.recepcion', [
            'recepciones' => Recepcion::all()
        ]);
    }


    public function title(): string
    {
        return 'reporte-recepcion';
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Recepcion::all();
    // }
}
