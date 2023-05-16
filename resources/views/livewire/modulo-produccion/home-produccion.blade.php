<div>
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <a href="{{route('lista_produccion')}}" class="navbar-brand" style="color: white;">Lista de producci&oacute;n</a>
            <label for="" style="color: white;">Bienvenido: {{session('usuario')}}</label>
            <a class="navbar-brand" wire:click='cerrar_sesion' href="#" style="color: white;">Cerrar Sesi&oacute;n <i class="fa-solid fa-right-from-bracket"></i></a>
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
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 style="text-align: center;">Registro de Producci&oacute;n</h5>
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
                                            <input type="text" class="form-control" wire:model="fecha" disabled>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="">Numero de personas</label>
                                        <br>
                                        <input type="number" wire:model="num_personas"
                                            class="form-control @error('num_personas') is-invalid @enderror">
                                        @error('num_personas')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Gas inicio</label>
                                        <br>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-solid fa-percent"></i></label>
                                            <input type="text" wire:model="gas_inicio"
                                                class="form-control @error('gas_inicio') is-invalid @enderror">
                                        </div>
                                        @error('gas_inicio')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Gas final</label>
                                        <br>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-solid fa-percent"></i></label>
                                            <input type="text" wire:model="gas_final"
                                                class="form-control @error('gas_final') is-invalid @enderror">
                                        </div>
                                        @error('gas_final')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Kg de nopal</label>
                                        <br>
                                        <input type="number" wire:model="kg_nopal"
                                            class="form-control @error('kg_nopal') is-invalid @enderror">
                                        @error('kg_nopal')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Tama&ntilde;o Nopal</label>
                                        <br>
                                        <select wire:model="tamano_nopal" class="form-select @error('tamano_nopal') is-invalid @enderror">
                                            <option value="" disabled selected>Seleccione</option>
                                            <option value="chico">Chico</option>
                                            <option value="mediano">Mediano</option>
                                            <option value="grande">Grande</option>
                                            <option value="mixto">Mixto</option>
                                        </select>
                                        @error('tamano_nopal')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Realizaron lavado</label>
                                        <br>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-solid fa-person"></i></label>
                                            <select wire:model="personal_lavado" class="form-select @error('personal_lavado') is-invalid @enderror">
                                                <option value="" selected>Seleccione</option>
                                                <option value="Andy">Andy</option>
                                                <option value="Ruben">Ruben</option>
                                                <option value="Juan Gabriel">Juan Gabriel</option>
                                                <option value="Yamir">Yamir</option>
                                                <option value="Juan Carlos">Juan Carlos</option>
                                                <option value="Noe">Noe</option>
                                                <option value="Susana">Susana</option>
                                                <option value="Fernando">Fernando</option>
                                                <option value="Enrique">Enrique</option>
                                                <option value="Juan Daniel">Juan Daniel</option>
                                            </select>
                                        </div>
                                        @error('personal_lavado')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for=""># de marmitas</label>
                                        <br>
                                        <input type="number" wire:model="num_marmitas"
                                            class="form-control @error('num_marmitas') is-invalid @enderror">
                                        @error('num_marmitas')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Temperatura</label>
                                        <br>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-solid fa-temperature-three-quarters"></i></label>
                                            <input type="number" wire:model="temperatura"
                                                class="form-control @error('temperatura') is-invalid @enderror">
                                        </div>
                                        @error('temperatura')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Color sellado</label>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group">
                                                    <label for="" class="input-group-text"><i class="fa-solid fa-brush"></i></label>
                                                    <select wire:click="encargado_sellado" wire:model="color_sellado" class="form-select @error('color_sellado') is-invalid @enderror">
                                                        <option value="" selected>Seleccione color</option>
                                                        <option value="rojo"> Rojo</option>
                                                        <option value="amarillo"> Amarillo</option>
                                                        <option value="azul"> Azul</option>
                                                        <option value="verde"> Verde</option>
                                                        <option value="blanco"> Blanco</option>
                                                        <option value="negro"> Negro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <button
                                                    class="btn btn-lg @if ($color_sellado == 'rojo') bg-danger @endif
                                                @if ($color_sellado == 'amarillo') bg-warning @endif
                                                @if ($color_sellado == 'azul') bg-primary @endif
                                                @if ($color_sellado == 'verde') bg-success @endif
                                                @if ($color_sellado == 'blanco') bg-light @endif
                                                @if ($color_sellado == 'negro') bg-dark @endif"
                                                    disabled></button>
                                            </div>
                                        </div>
                                        <br>
                                        @error('color_sellado')
                                            <span class="error text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <br>
                    
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Realizaron sellados</label>
                                        <br>
                                        <select wire:model="personal_sellado" class="form-select @error('personal_sellado') is-invalid @enderror">
                                            <option value="">Seleccione</option>
                                            <option value="edgar">Edgar</option>
                                            <option value="andy">Andy</option>
                                            <option value="fernando">Fernando</option>
                                            <option value="jocelyn">Jocelyn</option>
                                            <option value="jesus">Jesus</option>
                                            <option value="Zami">Zami</option>
                                        </select>
                                        @error('personal_sellado')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Validaci&oacute;n de choque t&eacute;rmico</label>
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" value="si" wire:model="validacion_choque"
                                                    class="form-check-input">
                                                <label for="">Si</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" wire:model="validacion_choque" class="form-check-input">
                                                <label for="">No</label>
                                            </div>
                                            @error('validacion_choque')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="">Gramaje del producto</label>
                                        <select wire:model="gramaje" class="form-select @error('gramaje') is-invalid @enderror">
                                            <option value="">Seleccione</option>
                                            <option value="bolsa 500g">Bolsa de 500g</option>
                                            <option value="bolsa entero 500g">Bolsa de entero 500g</option>
                                            <option value="bolsa 1kg">Bolsa de 1kg</option>
                                            <option value="bolsa entero 1kg">Bolsa de entero 1kg</option>
                                            <option value="bolsa 1.2kg">Bolsa de 1.2kg</option>
                                            <option value="bolsa 3kg">Bolsa de 3kg</option>
                                        </select>
                                        @error('gramaje') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Piezas</label>
                                        <input type="text" wire:model="piezas" class="form-control @error('piezas') is-invalid @enderror">
                                        @error('piezas')
                                            <span class="error text-danger"> {{$message}} </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="">Kg de merma</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-solid fa-hashtag"></i></label>
                                            <input type="text" wire:model="mermas" class="form-control @error('mermas') is-invalid @enderror">
                                        </div>
                                        @error('mermas') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <textarea wire:model="observaciones" class="form-control" placeholder="Observaciones" rows="5"></textarea>
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
    </div>
    
</div>
