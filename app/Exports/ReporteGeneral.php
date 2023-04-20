<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ReporteGeneral implements WithMultipleSheets
{
    use Exportable;

    public function __construct()
    {
        
    }

    public function sheets():array{
        $sheets = [];
        //array_push($sheets, new UserExport());
        array_push($sheets, new CampoExport());
        array_push($sheets, new DesespinadoExport());
        array_push($sheets, new EmpaqueExport());
        array_push($sheets, new ProduccionExport());
        array_push($sheets, new RecepcionExport());
        return $sheets;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     //
    // }
}
