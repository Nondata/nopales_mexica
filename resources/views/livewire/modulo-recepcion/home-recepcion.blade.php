<div>
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <a href="{{route('lista_recepcion')}}" class="navbar-brand" style="color: white">Lista de recepci&oacute;n</a>
            <label for="" style="color:white;">Bienvenido: {{session('usuario')}}</label>
            <a class="navbar-brand" wire:click='cerrar_sesion' href="#" style="color:white;">Cerrar Sesi&oacute;n <i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                @if (session()->has('message'))
                    <div class="alert alert-success text-center">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger text-center">
                        {{session('message')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <br>
    <div class="container mt-4">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h5 style="text-align: center;">Registro de recepci&oacute;n</h5>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="save" class="form">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <label for="fecha">Fecha</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-calendar-days"></i></label>
                                        <input type="text" wire:model="fecha" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="proveedor">Proveedor</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-car-side"></i></label>
                                        <input type="text" wire:model="proveedor" class="form-control @error('proveedor') is-invalid @enderror">
                                    </div>
                                    @error('proveedor')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="tabla">Tabla</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-table"></i></label>
                                        <input type="text" wire:model="tabla" class="form-control @error('tabla') is-invalid @enderror">
                                    </div>
                                    @error('tabla')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="nopal">Kg de nopal</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-hashtag"></i></label>
                                        <input type="text" wire:model="kg_nopal" class="form-control @error('kg_nopal') is-invalid @enderror">
                                    </div>
                                    @error('kg_nopal')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="cajas">Numero de cajas</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-hashtag"></i></label>
                                        <input type="text" wire:model="cajas" class="form-control @error('cajas') is-invalid @enderror">
                                    </div>
                                    @error('cajas')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="tamano">Tama&ntilde;o</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-gift"></i></label>
                                        <select wire:model="tamano" class="form-select @error('tamano') is-invalid @enderror">
                                            <option value="" selected>Seleccione</option>
                                            <option value="chico">Chico</option>
                                            <option value="mediano">Mediano</option>
                                            <option value="grande">Grande</option>
                                            <option value="mixto">Mixto</option>
                                        </select>
                                    </div>
                                    @error('tamano')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <div class="form-check-label">Plagas</div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" wire:model="plagas" value="si"
                                                    class="form-check-input">
                                                <label for="">si</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" wire:model="plagas" value="no"
                                                    class="form-check-input">
                                                <label for="">no</label>
                                            </div>
                                            @error('plagas')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <div class="form-check-label">Apariencia firme y solida</div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" wire:model="apariencia" value="si"
                                                    class="form-check-input">
                                                <label for="">si</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" wire:model="apariencia" value="no"
                                                    class="form-check-input">
                                                <label for="">no</label>
                                            </div>
                                            @error('apariencia')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <div class="form-check-label">Color verde caracteristico</div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" wire:model="color" value="si"
                                                    class="form-check-input">
                                                <label for="">si</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" wire:model="color" value="no"
                                                    class="form-check-input">
                                                <label for="">no</label>
                                            </div>
                                            @error('color') <span class="error text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <div class="form-check-label">Olor caracteristico</div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" wire:model="olor" value="si"
                                                    class="form-check-input">
                                                <label for="">si</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" wire:model="olor" value="no"
                                                    class="form-check-input">
                                                <label for="">no</label>
                                            </div>
                                            @error('olor') <span class="error text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <div class="form-check-label">Defectos de piel menor 5%</div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" wire:model="defectos" value="si"
                                                    class="form-check-input">
                                                <label for="">si</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" wire:model="defectos" value="no"
                                                    class="form-check-input">
                                                <label for="">no</label>
                                            </div>
                                            @error('defectos') <span class="error text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <div class="form-check-label">Puntos de espinas no mayor al 7%</div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" wire:model="puntos_de_espinas" value="si"
                                                    class="form-check-input">
                                                <label for="">si</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" wire:model="puntos_de_espinas" value="no"
                                                    class="form-check-input">
                                                <label for="">no</label>
                                            </div>
                                            @error('puntos_de_espinas') <span class="error text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="">Kg merma</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-hashtag"></i></label>
                                        <input type="text" wire:model="kg_merma" class="form-control @error('kg_merma') is-invalid @enderror">
                                    </div>
                                    @error('kg_merma') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <div class="form-check-label">Rechazo total</div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" wire:model="rechazo" value="si"
                                                    class="form-check-input">
                                                <label for="">si</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" wire:model="rechazo" value="no"
                                                    class="form-check-input">
                                                <label for="">no</label>
                                            </div>
                                            @error('rechazo') <span class="error text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <textarea class="form-control" placeholder="Observaciones" wire:model="observaciones" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-success">Ingresar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
