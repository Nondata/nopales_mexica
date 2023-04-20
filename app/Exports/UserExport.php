<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

class UserExport implements FromView, WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{
        return view('vistasExport.usuario',[
            'usuarios' => User::all()
        ]);
    }
    public function title(): string
    {
        return 'lista-de-usuarios';
    }
}
