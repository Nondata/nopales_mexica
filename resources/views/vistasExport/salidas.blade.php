<table class="table">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Piezas</th>
            <th>Lote</th>
            <th>Caducidad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $salidas as $item)
            <tr>
                <td>{{$item->fecha}}</td>
                <td>{{$item->cliente}}</td>
                <td>{{$item->producto}}</td>
                <td>{{$item->piezas}}</td>
                <td>{{$item->lote}}</td>
                <td>{{$item->caducidad}}</td>
            </tr>
        @endforeach
    </tbody>
</table>