<?php

namespace App\Exports;

use App\Models\Produccion;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;


class ProduccionExport implements FromView, WithTitle
{   
    public function view(): View
    {
        return view('vistasExport.produccion', [
            'produccion' => Produccion::all()
        ]);
    }


    public function title(): string
    {
        return 'Produccion';
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Produccion::all();
    // }
}
