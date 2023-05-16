<table class="table">
    <thead>
        <tr>
            <th>Cantidad de cajas</th>
            <th>Codigo de trazabilidad</th>
            <th>Kg Nopal</th>
            <th># Cajas</th>
            <th>Kg Merma</th>
            <th>Fecha</th>
            <th>Kg Pelados</th>
            <th>Piezas</th>
            <th>Gramaje</th>
            <th>Kg Merma</th>
            <th>Cajas</th>
            <th>Piezas</th>
            <th>Lote</th>
            <th>Caducidad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($campos as $item)
            <tr>
                <td>{{$item->cantidad_cajas}}</td>
                <td>{{$item->trazabilidad}}</td>
                <td>{{$item->kg_nopal}}</td>
                <td>{{$item->num_cajas}}</td>
                <td>{{$item->kg_merma}}</td>
                <td>{{$item->fecha}}</td>
                <td>{{$item->kg_pelados}}</td>
                <td>{{$item->piezas}}</td>
                <td>{{$item->gramaje_producto}}</td>
                <td>{{$item->kg_merma}}</td>
                <td>{{$item->cajas}}</td>
                <td>{{$item->piezas}}</td>
                <td>{{$item->lote}}</td>
                <td>{{$item->caducidad}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
