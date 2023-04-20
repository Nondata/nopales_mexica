<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Encargado</th>
            <th>Fecha</th>
            <th>Actividad a realizar</th>
            <th>Cantidad de cajas</th>
            <th>Presentaci&oacute;n</th>
            <th>Zona de corte</th>
            <th>Trazabilidad</th>
            <th>Realizo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($campos as $item)
            <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->encargado}}</td>
                <td>{{ $item->fecha}}</td>
                <td>{{ $item->actividad_a_realizar}}</td>
                <td>{{ $item->cantidad_cajas}}</td>
                <td>{{ $item->presentacion}}</td>
                <td>{{ $item->zona_de_corte}}</td>
                <td>{{ $item->trazabilidad}}</td>
                <td>{{ $item->realizo}}</td>
            </tr>
        @endforeach
    </tbody>
</table>