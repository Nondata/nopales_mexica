<div>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center">Lista de Productos</h4>
                    </div>
                    <div class="card-body">
                        <div class="container ">
                            <div class="row">
                                <div class="col">
                                    <table class="table table-striped table-bordered">
                                        <div class="row">
                                            <div class="col-10"></div>
                                            <div class="col">
                                                <a href="{{ route('nuevo_producto') }}" class="btn btn-outline-secondary">Nuevo producto</a>
                                            </div>
                                        </div>
                                        <br>
                                        <input type="text" wire:model="query" class="form-control" placeholder="Buscar" />
                                        <br>
                                        <thead>
                                            <th>Producto</th>
                                            <th>Numero de Serie</th>
                                            <th>Cajas</th>
                                            <th>Piezas</th>
                                            <th>Piezas por caja</th>
                                            <th>Cantidad</th>
                                            <th>Tiempo de consumo</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $item)
                                                <tr>
                                                    <td>{{ $item->nombre_de_producto }}</td>
                                                    <td>{{ $item->numero_de_serie }}</td>
                                                    <td>{{ $item->cajas}}</td>
                                                    <td>{{ $item->piezas}}</td>
                                                    <td>{{ $item->piezas_por_caja}}</td>
                                                    <td>{{ $item->cantidad }}</td>
                                                    <td>{{ $item->tiempo_estimado_de_consumo }}</td>
                                                    <td><a href="{{ route('editar', ['producto'=>$item->id]) }}" class="btn btn-warning">Editar</a></td>
                                                    <td><a wire:click="delete({{$item->id}})" class="btn btn-danger">Eliminar</a></td>
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
                </div>
            </div>
        </div>
    </div>
    
</div>
