<?php

namespace App\Exports;

use App\Models\Empaque;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class EmpaqueExport implements FromView, WithTitle, WithColumnWidths
{
    public function view(): View
    {
        return view('vistasExport.empaque', [
            'empaques' => Empaque::all()
        ]);
    }

    public function columnWidths(): array
    {
        return [
            'B' => 15,
            'C' => 13,
            'D' => 20,
            'E' => 40,
            'M' => 15,
            'N' => 15,
            'O' => 20,
        ];
    }
    public function title(): string
    {
        return 'Empaque';
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Empaque::all();
    // }
}
