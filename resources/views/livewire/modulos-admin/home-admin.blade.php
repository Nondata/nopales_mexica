<div>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <table class="table table-striped table-bordered">
                    <h4 style="text-align: center">Lista de trabajadores</h4>
                    <input type="text" wire:model="query" class="form-control" placeholder="Buscar" />
                    <br>
                    <thead>
                        <th>Nombre(s)</th>
                        <th>Apellidos</th>
                        <th>Area</th>
                        <th>Cargo</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->apellidos }}</td>
                                <td>{{ $item->area }}</td>
                                <td>{{ $item->cargo }}</td>
                                <td><a href="{{ route('edit', ['user'=>$item->id]) }}" class="btn btn-warning">Editar</a></td>
                                <td><a wire:click="delete" class="btn btn-danger">Eliminar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    @if (method_exists($items, 'links'))
                        {{ $items->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
