<div>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

        <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('lista_empaque')}}" style="color:white;">Lista de Empaque</a>
            <label for="" style="color:white;">Bienvenido: {{session('usuario')}}</label>
            <a class="navbar-brand" wire:click='cerrar_sesion' href="#" style="color:white;">Cerrar Sesi&oacute;n <i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 style="text-align: center;">Registro de Empaque</h5>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="save">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Fecha</label>
                                        <br>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-solid fa-calendar-days"></i></label>
                                            <input type="text" wire:model="fecha" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="">Nombre empaco</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-solid fa-person"></i></label>
                                            <select wire:model="nombre_empaco"
                                                class="form-select @error('nombre_empaco') is-invalid @enderror">
                                                <option value="">Seleccione</option>
                                                <option value="mayra">Mayra</option>
                                                <option value="beatriz">Beatriz</option>
                                                <option value="Juan Daniel">Juan Daniel</option>
                                                <option value="vianey">Vianey</option>
                                                <option value="yamir">Yamir</option>
                                                <option value="juan carlos">Juan Carlos</option>
                                                <option value="esmeralda">Esmeralda</option>
                                                <option value="juan gabriel">Juan Gabriel</option>
                                                <option value="katia">Katia</option>
                                                <option value="monserrat">Monserrat</option>
                                                <option value="yesica">Yesica</option>
                                            </select>
                                        </div>
                                        <br>
                                        @error('nombre_empaco')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Tipo de producto</label>
                                        <div wire:ignore>
                                            <select wire:model="producto"
                                                class="form-select @error('producto') is-invalid @enderror"
                                                id="select2">
                                                <option value="">Seleccione producto</option>
                                                @foreach ($catalogo as $item)
                                                    <option value="{{ $item->nombre_de_producto }}">
                                                        {{ $item->nombre_de_producto }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('producto')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Color</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-solid fa-palette"></i></label>
                                            <select wire:model="color_sello"
                                                class="form-select @error('color_sello')is-invalid @enderror">
                                                <option value="">Seleccione</option>
                                                <option value="amarillo">Amarillo</option>
                                                <option value="azul">Azul</option>
                                                <option value="verde">Verde</option>
                                                <option value="rojo">Rojo</option>
                                                <option value="blanco">Blanco</option>
                                                <option value="negro">Negro</option>
                                            </select>
                                        </div>
                                        @error('color_sello')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Cajas</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-solid fa-boxes-stacked"></i></label>
                                            <input type="text" wire:model="cajas"
                                                class="form-control @error('cajas')is-invalid @enderror">
                                        </div>
                                        @error('cajas')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Piezas</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-brands fa-elementor"></i></label>
                                            <input type="text" wire:model="piezas"
                                                class="form-control @error('piezas')is-invalid @enderror">
                                        </div>
                                        @error('piezas')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Fugas</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-solid fa-water"></i></label>
                                            <input type="text" wire:model="fugas"
                                                class="form-control @error('fugas')is-invalid @enderror">
                                        </div>
                                        @error('fugas')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Burbuja</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-solid fa-spinner"></i></label>
                                            <input type="text" wire:model="burbuja"
                                                class="form-control @error('burbuja')is-invalid @enderror">
                                        </div>
                                        @error('burbuja')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Sello</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-regular fa-rectangle-xmark"></i></label>
                                            <input type="text" wire:model="sello"
                                                class="form-control @error('sello')is-invalid @enderror">
                                        </div>
                                        @error('sello')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Rechazo</label>
                                        <input type="text" wire:model="rechazo"
                                            class="form-control @error('rechazo')is-invalid @enderror">
                                        @error('rechazo')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Lote</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-solid fa-envelope"></i></label>
                                            <input type="text" wire:model="lote" disabled
                                                class="form-control @error('lote')is-invalid @enderror">
                                        </div>
                                        @error('lote')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Caducidad</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-regular fa-calendar"></i></label>
                                            <input type="text" wire:model="caducidad" disabled
                                                class="form-control @error('caducidad')is-invalid @enderror">
                                        </div>
                                        @error('caducidad')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <textarea wire:model="observaciones"rows="5" class="form-control" placeholder="Observaciones"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary">Ingresar</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('livewire:load', () => {
            $('#select2').select2({
                theme: 'bootstrap-5'
            });
            $('#select2').on('change', function() {
                //alert(this.value);
                @this.set('producto', this.value);
            });
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</div>
