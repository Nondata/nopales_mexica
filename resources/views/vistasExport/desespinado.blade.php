<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Encargado</th>
            <th>Fecha</th>
            <th>Nombre</th>
            <th>Kg pelados</th>
            <th>Piezas</th>
            <th>Observaciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($desespinados as $item)
            <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->encargado}}</td>
                <td>{{ $item->fecha}}</td>
                <td>{{ $item->nombre}}</td>
                <td>{{ $item->kg_pelados}}</td>
                <td>{{ $item->piezas}}</td>
                <td>{{ $item->observaciones}}</td>
            </tr>
        @endforeach
    </tbody>
</table>