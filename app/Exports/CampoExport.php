<?php

namespace App\Exports;

use App\Models\Campo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithTitle;

class CampoExport implements FromView, WithTitle, WithColumnWidths
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

    public function columnWidths(): array
    {
        return [
            'B' => 12,
            'C'=> 13,
            'D'=> 19,
            'E'=> 17,
            'F'=> 13,
            'G'=> 12,
            'H'=> 34,
            'I'=> 12,
        ];
    }
    public function title(): string
    {
        return 'Campo';
    }
}
