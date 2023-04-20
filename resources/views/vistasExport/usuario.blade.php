<table class="table">
    <thead style="text-align: center;">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Area</th>
            <th>Cargo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $item)
            <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->nombre}}</td>
                <td>{{ $item->apellidos}}</td>
                <td>{{ $item->area}}</td>
                <td>{{ $item->cargo}}</td>
            </tr>
        @endforeach
    </tbody>
</table>