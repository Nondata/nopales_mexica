<div>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <label for="">Bienvenido: </label>
            <a class="navbar-brand" wire:click='cerrar_sesion' href="#">Cerrar Sesi&oacute;n</a>
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
                        {{session('message')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <br>
    <form wire:submit.prevent="save">
        <div class="container">
            <div class="row">
                <div class="col">
                    <label for="">Fecha</label>
                    <br>
                    <input type="text" wire:model="fecha" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">Nombre empaco</label>
                    <br>
                    <select wire:model="nombre_empaco" class="form-select @error('nombre_empaco') is-invalid @enderror">
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
                    @error('nombre_empaco')
                        <span class="error text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="col">
                    <label for="">Tipo de producto</label>
                    <div wire:ignore>
                        <select wire:model="producto" class="form-select @error('producto') is-invalid @enderror"
                            id="select2">
                            <option value="">Seleccione producto</option>
                            @foreach ($catalogo as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
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
                    <select wire:model="color_sello" class="form-select @error('color_sello')is-invalid @enderror">
                        <option value="">Seleccione</option>
                        <option value="amarillo">Amarillo</option>
                        <option value="azul">Azul</option>
                        <option value="verde">Verde</option>
                        <option value="rojo">Rojo</option>
                        <option value="blanco">Blanco</option>
                        <option value="negro">Negro</option>
                    </select>
                    @error('color_sello')
                        <span class="error text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="col">
                    <label for="">Cajas</label>
                    <input type="text" wire:model="cajas" class="form-control @error('cajas')is-invalid @enderror">
                    @error('cajas')
                        <span class="error text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="col">
                    <label for="">Piezas</label>
                    <input type="text" wire:model="piezas" class="form-control @error('piezas')is-invalid @enderror">
                    @error('piezas')
                        <span class="error text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="col">
                    <label for="">Fugas</label>
                    <input type="text" wire:model="fugas" class="form-control @error('fugas')is-invalid @enderror">
                    @error('fugas')
                        <span class="error text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label for="">Burbuja</label>
                    <input type="text" wire:model="burbuja"
                        class="form-control @error('burbuja')is-invalid @enderror">
                    @error('burbuja')
                        <span class="error text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="col">
                    <label for="">Sello</label>
                    <input type="text" wire:model="sello" class="form-control @error('sello')is-invalid @enderror">
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
                    <input type="text" wire:model="lote" class="form-control @error('lote')is-invalid @enderror">
                    @error('lote')
                        <span class="error text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="col">
                    <label for="">Caducidad</label>
                    <input type="text" wire:model="caducidad"
                        class="form-control @error('caducidad')is-invalid @enderror">
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
            <br>
            <button class="btn btn-primary">Ingresar</button>
        </div>
    </form>
    <script>
        // window.initSelect2 = () => {
        //     jQuery("#select2").select2({
        //         theme: 'bootstrap-5',
        //         minimumResultsForSearch: 1,
        //         allowClear: true
        //     });
        // }
        // initSelect2();
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
