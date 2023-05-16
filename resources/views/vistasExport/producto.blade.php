<table class="table">
    <thead>
        <tr>
            <th>Nombre del producto</th>
            <th>Cajas</th>
            <th>Piezas</th>
            <th>Cantidad total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($producto as $item)
            <tr>
                <td>{{ $item->nombre_de_producto}}</td>
                <td>{{ $item->cajas}}</td>
                <td>{{ $item->piezas}}</td>
                <td>{{ $item->cantidad}}</td>
            </tr>
        @endforeach
    </tbody>
</table>