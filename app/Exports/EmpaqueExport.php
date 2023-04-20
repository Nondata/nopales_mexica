<?php

namespace App\Exports;

use App\Models\Empaque;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

class EmpaqueExport implements FromView, WithTitle
{
    public function view(): View
    {
        return view('vistasExport.empaque', [
            'empaques' => Empaque::all()
        ]);
    }


    public function title(): string
    {
        return 'reporte-empaque';
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Empaque::all();
    // }
}
