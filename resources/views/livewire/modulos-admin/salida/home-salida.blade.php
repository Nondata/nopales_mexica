<div>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
        <div class="container">
            <div class="row">
                <div class="col">
                    @if (session()->has('message'))
                        <div class="alert alert-success" style="text-align: center">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger" style="text-align: center;">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <br>
    
        <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 style="text-align: center">Salida de producto</h3>
                    </div>
                    @if (session()->has('piezas'))
                    <div class="alert alert-warning" style="text-align: center;">
                        {{session('piezas')}}
                    </div>
                        
                    @endif
                    <form wire:submit.prevent="guardar">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Fecha</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i
                                                    class="fa-solid fa-calendar-days"></i></label>
                                            <input type="text" wire:model="fecha" disabled class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="">Cliente</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i
                                                    class="fa-solid fa-person-walking-arrow-right"></i></label>
                                            <input type="text" wire:model="cliente"
                                                class="form-control @error('cliente') is-invalid @enderror">
                                        </div>
                                        @error('cliente')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for=""> Producto</label>
                                            <div wire:ignore>
                                                <select wire:model="producto" id="select2" class="form-select @error('producto') is-invalid @enderror" >
                                                    <option value="">Seleccione producto</option>
                                                    @foreach ($catalogo as $item)
                                                        <option value="{{ $item->nombre_de_producto}}">{{ $item->nombre_de_producto}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        @error('producto')
                                        <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Piezas</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i
                                                    class="fa-solid fa-cubes-stacked"></i></label>
                                            <input type="text" wire:model="piezas"
                                                class="form-control @error('piezas') is-invalid @enderror">
                                        </div>
                                        @error('piezas')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Lote</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i
                                                    class="fa-solid fa-font-awesome"></i></label>
                                            <input type="text"wire:model="lote" class="form-control @error('lote') is-invalid @enderror">
                                        </div>
                                        @error('lote')
                                            <span class="error text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Caducidad</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i
                                                    class="fa-solid fa-calendar"></i></label>
                                            <input type="date" wire:model="caducidad" class="form-control @error('caducidad') is-invalid @enderror">
                                        </div>
                                        @error('caducidad')
                                            <span class="error text-danger"> {{$message}} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            @if ($producto != null)
                                
                            <div class="d-grip gap-2 d-md-flex">
                                <label for="">Piezas totales disponibles: {{$piezas_totales}}</label>
                            </div>
                            @endif
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary">Realizar env&iacute;o</button>
                            </div>
                        </div>
                    </form>
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
