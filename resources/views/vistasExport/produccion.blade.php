<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Encargado</th>
            <th>Fecha</th>
            <th># Personas</th>
            <th>Gas Inicio</th>
            <th>Gas Final</th>
            <th>Kg Nopal</th>
            <th>Tama&ntilde;o Nopal</th>
            <th>Personal Lavado</th>
            <th># marmitas</th>
            <th>Temperatura</th>
            <th>Sello</th>
            <th>Personal Sellado</th>
            <th>Choque Termico</th>
            <th>Producto</th>
            <th>Piezas</th>
            <th>Merma</th>
            <th>Observaciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produccion as $item)
            <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->encargado}}</td>
                <td>{{ $item->fecha}}</td>
                <td>{{ $item->num_personas}}</td>
                <td>{{ $item->gas_inicio}}</td>
                <td>{{ $item->gas_final}}</td>
                <td>{{ $item->kg_nopal}}</td>
                <td>{{ $item->tamano_nopal}}</td>
                <td>{{ $item->realizaron_lavado}}</td>
                <td>{{ $item->num_marmitas}}</td>
                <td>{{ $item->temperatura}}</td>
                <td>{{ $item->color_sello}}</td>
                <td>{{ $item->realizaron_sellado}}</td>
                <td>{{ $item->choque_termico}}</td>
                <td>{{ $item->gramaje_producto}}</td>
                <td>{{ $item->piezas}} </td>
                <td>{{ $item->kg_merma}}</td>
                <td>{{ $item->observaciones}}</td>
            </tr>
        @endforeach
    </tbody>
</table>