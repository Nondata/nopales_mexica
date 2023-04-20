<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Encargado</th>
            <th>Fecha</th>
            <th>Nombre Empaco</th>
            <th>Producto</th>
            <th>Color</th>
            <th>Cajas</th>
            <th>Piezas</th>
            <th>Fugas</th>
            <th>Burbuja</th>
            <th>Sello</th>
            <th>Rechazo</th>
            <th>Lote</th>
            <th>Caducidad</th>
            <th>Observaciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empaques as $item)
            <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->encargado}}</td>
                <td>{{ $item->fecha}}</td>
                <td>{{ $item->nombre_empaco}}</td>
                <td>{{ $item->tipo_producto}}</td>
                <td>{{ $item->color}}</td>
                <td>{{ $item->cajas}}</td>
                <td>{{ $item->piezas}}</td>
                <td>{{ $item->fugas}}</td>
                <td>{{ $item->burbuja}}</td>
                <td>{{ $item->sello}}</td>
                <td>{{ $item->rechazo}}</td>
                <td>{{ $item->lote}}</td>
                <td>{{ $item->caducidad}}</td>
                <td>{{ $item->observaciones}}</td>
            </tr>
        @endforeach
    </tbody>
</table>