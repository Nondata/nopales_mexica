<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Encargado</th>
            <th>Fecha</th>
            <th>Proveedor</th>
            <th>Tabla</th>
            <th>Kg Nopal</th>
            <th># Cajas</th>
            <th>Tama&ntilde;o</th>
            <th>Plagas</th>
            <th>Apariencia</th>
            <th>Color Verde</th>
            <th>Olor</th>
            <th>Defectos</th>
            <th>Desespinados</th>
            <th>Kg Merma</th>
            <th>Rechazo total</th>
            <th>Observaciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($recepciones as $item)
            <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->encargado}}</td>
                <td>{{ $item->fecha}}</td>
                <td>{{ $item->proveedor}}</td>
                <td>{{ $item->tabla}}</td>
                <td>{{ $item->kg_nopal}}</td>
                <td>{{ $item->num_cajas}}</td>
                <td>{{ $item->tamanio}}</td>
                <td>{{ $item->plagas}}</td>
                <td>{{ $item->apariencia}}</td>
                <td>{{ $item->color_verde}}</td>
                <td>{{ $item->olor}}</td>
                <td>{{ $item->defectos}}</td>
                <td>{{ $item->desespinados}}</td>
                <td>{{ $item->kg_merma}}</td>
                <td>{{ $item->rechazo_total}}</td>
                <td>{{ $item->observaciones}}</td>
            </tr>
        @endforeach
    </tbody>
</table>