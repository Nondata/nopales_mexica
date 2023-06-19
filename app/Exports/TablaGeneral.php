<?php

namespace App\Exports;

use App\Models\Campo;
use App\Models\Desespinado;
use App\Models\Empaque;
use App\Models\Produccion;
use App\Models\Recepcion;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

class TablaGeneral implements FromView, WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{
        return view('vistasExport.general', [
            // 'campos' => Campo::select('campos.cantidad_cajas', 'campos.trazabilidad',
            // 'recepcions.kg_nopal', 'recepcions.num_cajas', 'recepcions.kg_merma',
            // 'desespinados.fecha', 'desespinados.kg_pelados', 'desespinados.piezas',
            // 'produccions.gramaje_producto','produccions.kg_merma',
            // 'empaques.cajas', 'empaques.piezas', 'empaques.lote', 'empaques.caducidad')
            // ->join('recepcions', 'recepcions.id', '>=', 'campos.id')
            // ->join('desespinados', 'desespinados.id', '=', 'campos.id')
            // ->join('produccions', 'produccions.id', '=', 'campos.id')
            // ->join('empaques', 'empaques.id', '=', 'campos.id')
            // ->get(),
            'campos' => Campo::select('cantidad_cajas', 'trazabilidad')->get(),
            'recepcion' => Recepcion::select('kg_nopal', 'num_cajas', 'kg_merma')->get(),
            'desespinado' => Desespinado::select('fecha', 'kg_pelados', 'piezas')->get(),
            'produccion' => Produccion::select('gramaje_producto', 'kg_merma')->get(),
            'empaques' => Empaque::select('cajas', 'piezas', 'lote', 'caducidad')->get(),
        ]);
    }

    public function title(): string{
        return 'Reporte General';
    }
}
