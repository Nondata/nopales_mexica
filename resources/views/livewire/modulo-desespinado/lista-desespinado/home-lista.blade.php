<div>
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <label for="" style="color: white;">Bienvenido: {{session('usuario')}}</label>
            <a class="navbar-brand" wire:click='cerrar_sesion' href="#" style="color: white;">Cerrar Sesi&oacute;n <i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </nav>
    <br>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Encargado</th>
                <th>Fecha</th>
                <th>Nombre</th>
                <th>Kg pelados</th>
                <th>Piezas</th>
                <th>Observaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($desespinado as $item)
                <tr>
                    <td>{{ $item->encargado}}</td>
                    <td>{{ $item->fecha }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->kg_pelados }}</td>
                    <td>{{ $item->piezas }}</td>
                    <td>{{ $item->observaciones }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
