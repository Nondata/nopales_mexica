<?php

namespace App\Exports;

use App\Models\Desespinado;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;


class DesespinadoExport implements FromView, WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View{
        return view('vistasExport.desespinado', [
            'desespinados' => Desespinado::all()
        ]);
    }
    public function title():string{
        return 'lista-desespinado';
    }
    // public function collection()
    // {
    //     return Desespinado::all();
    // }
}
