<?php

namespace App\Exports;

use App\Models\Salida;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class SalidasExport implements FromView, WithTitle, WithColumnWidths
{
    public function view(): View
    {
        return view('vistasExport.salidas', [
            'salidas' => Salida::all(),
        ]);
    }
    public function title(): string
    {
        return "Salidas";
    }

    public function columnWidths(): array
    {
        return [
            'A' => 12,
            'B' => 30,
            'C' => 40,
            'E' => 18,
            'F' => 15,
        ];
    }
}
