<div>
    <div class="container">
        <div class="row">
            <div class="col">
                @if (session()->has('message'))
                    <div class="alert alert-success text-center">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-8 mt-3">
                <div class="card">
                    <div class="card-body">
                        <form wire:submit.prevent="submit">
                            <h5 class="card-title" style="text-align: center;">Nuevo Producto</h5>
                            <label for="nombre">Nombre del producto</label>
                            <input type="text" wire:model="nombre_producto"
                                class="form-control @error('nombre_producto') is-invalid @enderror">
                            @error('nombre_producto')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="apellidos">Numero de serie</label>
                                    <input type="text" wire:model="num_serie" maxlength="3"
                                        class="form-control @error('num_serie') is-invalid @enderror">
                                    @error('num_serie')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="">Cajas</label>
                                    <input type="text" wire:model="cajas" class="form-control @error('cajas') is-invalid @enderror">
                                    @error ('cajas') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col">
                                    <label for="">Piezas</label>
                                    <input type="text" wire:model="piezas" class="form-control @error('piezas') is-invalid @enderror">
                                    @error('piezas')
                                        <span class="error text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="">Piezas por caja</label>
                                    <input type="text" wire:model="piezas_por_caja" class="form-control @error('piezas_por_caja') is-invalid @enderror">
                                    @error('piezas_por_caja')
                                        <span class="error text-danger"> {{$message}} </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="carg">Tiempo estimado de caducidad</label>
                                    <select wire:model="tiempo_caducidad" class="form-select @error('tiempo_caducidad') is-invalid @enderror">
                                        <option value="">Seleccione</option>
                                        <option value="180">6 meses</option>
                                        <option value="240">8 meses</option>
                                        <option value="300">10 meses</option>
                                        <option value="540">18 meses</option>
                                        <option value="366">1 a&ntilde;o</option>
                                        <option value="732">2 a&ntilde;os</option>
                                    </select>
                                    @error('tiempo_caducidad')
                                        <span class="error text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="area">Cantidad (piezas en total)</label>
                                    <input type="number" wire:model="cantidad" class="form-control @error('cantidad') is-invalid @enderror" >
                                    @error('cantidad')
                                        <span class="error text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-outline-success">Guardar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
