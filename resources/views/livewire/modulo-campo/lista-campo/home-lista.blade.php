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
                <th>Actividad a realizar</th>
                <th>Cantidad cajas</th>
                <th>Presentaci&oacute;n</th>
                <th>Zona de corte</th>
                <th>Trazabilidad</th>
                <th>Realizo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($campo as $item)
                <tr>
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
</div>
