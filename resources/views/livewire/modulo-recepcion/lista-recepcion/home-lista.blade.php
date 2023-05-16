<div>
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <label for="" style="color:white;">Bienvenido: {{session('usuario')}}</label>
            <a class="navbar-brand" wire:click='cerrar_sesion' href="#" style="color:white;">Cerrar Sesi&oacute;n <i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </nav>
    <br>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Encargado</th>
                <th>Fecha</th>
                <th>Proveedor</th>
                <th>Tabla</th>
                <th>Kg Nopal</th>
                <th># cajas</th>
                <th>Tama&ntilde;o</th>
                <th>Plagas</th>
                <th>Apariencia</th>
                <th>Color verde</th>
                <th>Olor</th>
                <th>Defectos</th>
                <th>Desespinado</th>
                <th>Kg merma</th>
                <th>Rechazo Total</th>
                <th>Observaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recepcion as $item)
                <tr>
                    <td>{{ $item->encargado }}</td>
                    <td>{{ $item->fecha }}</td>
                    <td>{{ $item->proveedor }}</td>
                    <td>{{ $item->tabla }}</td>
                    <td>{{ $item->kg_nopal }}</td>
                    <td>{{ $item->num_cajas }}</td>
                    <td>{{ $item->tamanio }}</td>
                    <td>{{ $item->plagas }}</td>
                    <td>{{ $item->apariencia }}</td>
                    <td>{{ $item->color_verde }}</td>
                    <td>{{ $item->olor }}</td>
                    <td>{{ $item->defectos }}</td>
                    <td>{{ $item->desespinados }}</td>
                    <td>{{ $item->kg_merma}}</td>
                    <td>{{ $item->rechazo_total }}</td>
                    <td>{{ $item->observaciones }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
