<?php

namespace App\Exports;

use App\Models\Desespinado;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithColumnWidths;


class DesespinadoExport implements FromView, WithTitle, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View{
        return view('vistasExport.desespinado', [
            'desespinados' => Desespinado::all()
        ]);
    }

    public function columnWidths(): array
    {
        return [
            'B' => 20,
            'C' => 18,
            'E' => 13,
            'G' => 30,
        ];
    }
    public function title():string{
        return 'Desespinado';
    }
    // public function collection()
    // {
    //     return Desespinado::all();
    // }
}
