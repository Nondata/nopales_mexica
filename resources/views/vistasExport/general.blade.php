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
        {{-- @foreach ($campos as $item)
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
        @endforeach --}}
        @foreach ($campos as $item)
            <tr>
                <td>{{ $item->cantidad_cajas }}</td>
                <td>{{ $item->trazabilidad }}</td>
            </tr>
        @endforeach
        @foreach ($recepcion as $item1)
            <tr>
                <td>{{ $item1->kg_nopal}}</td>
                <td>{{ $item1->num_cajas}}</td>
                <td>{{ $item1->kg_merma}}</td>
            </tr>
        @endforeach
        @foreach ($desespinado as $item2)
            <tr>
                <td>{{ $item2->fecha}}</td>
                <td>{{ $item2->kg_pelados}}</td>
                <td>{{ $item2->piezas}}</td>
            </tr>
        @endforeach
        @foreach ($produccion as $item)
            <tr>
                <td>{{ $item->gramaje_producto}}</td>
                <td>{{ $item->kg_merma}}</td>
            </tr>
        @endforeach
        @foreach ($empaques as $item)
            <tr>
                <td>{{ $item->cajas}}</td>
                <td>{{ $item->piezas}}</td>
                <td>{{ $item->lote}}</td>
                <td>{{ $item->caducidad}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
