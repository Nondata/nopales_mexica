<div>
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <label for="" style="color:white;">Bienvenido: {{session('usuario')}}</label>
            <a class="navbar-brand" wire:click='cerrar_sesion' href="#" style="color:white;">Cerrar Sesi&oacute;n <i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </nav>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Encargado</th>
                <th>Fecha</th>
                <th>Nombre de Empaco</th>
                <th>Tipo de Producto</th>
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
            @foreach ($producto as $item)
                <tr>
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
    
</div>
