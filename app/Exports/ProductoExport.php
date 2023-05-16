<?php

namespace App\Exports;

use App\Models\Producto;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class ProductoExport implements FromView, WithTitle, WithColumnWidths 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{
        return view('vistasExport.producto',[
            'producto' => Producto::all(),
        ]);
    }

    public function title(): String{
        return 'Productos';
    }

    public function columnWidths(): array
    {
        return [
            'A' => 55,
            'D' => 15,
        ];
    }
    
}
