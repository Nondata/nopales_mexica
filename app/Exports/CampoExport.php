<?php

namespace App\Exports;

use App\Models\Campo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

class CampoExport implements FromView, WithTitle
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('vistasExport.campo', [
            'campos' => Campo::all()
        ]);
    }


    public function title(): string
    {
        return 'reporte-campo';
    }
    // public function collection()
    // {
    //     return Campo::all();
    // }
}
