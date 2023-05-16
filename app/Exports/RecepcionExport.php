<?php

namespace App\Exports;

use App\Models\Recepcion;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class RecepcionExport implements FromView, WIthTitle, WithColumnWidths
{
    public function view(): View
    {
        return view('vistasExport.recepcion', [
            'recepciones' => Recepcion::all()
        ]);
    }

    public function title(): string
    {
        return 'Recepcion';
    }
    public function columnWidths(): array
    {
        return [
            'B' => 20,
            'C' => 13,
            'D' => 18,
            'J' => 11,
            'K' => 10,
            'N' => 14,
            'O' => 11,
            'P' => 14,
            'Q' => 20
        ];
    }
}
