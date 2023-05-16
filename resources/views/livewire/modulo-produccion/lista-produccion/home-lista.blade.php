<div>
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <label for="" style="color: white;">Bienvenido: {{ session('usuario') }}</label>
            <a class="navbar-brand" wire:click='cerrar_sesion' href="#" style="color: white;">Cerrar Sesi&oacute;n <i
                    class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </nav>
    <br>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Encargado</th>
                <th>Fecha</th>
                <th>Numero de personas</th>
                <th>Gas Inicio</th>
                <th>Gas Final</th>
                <th>Kg nopal</th>
                <th>Tama&ntilde;o Nopal</th>
                <th>Realizaron lavado</th>
                <th>Marmitas</th>
                <th>Temperatura</th>
                <th>Color de sello</th>
                <th>Realizar&oacute;n Sellado</th>
                <th>Choque Termico</th>
                <th>Gramaje</th>
                <th>Piezas</th>
                <th>Kg de Merma</th>
                <th>Observaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produccion as $item)
                <tr>
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
                    <td>{{ $item->piezas}}</td>
                    <td>{{ $item->kg_merma}}</td>
                    <td>{{ $item->observaciones}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
