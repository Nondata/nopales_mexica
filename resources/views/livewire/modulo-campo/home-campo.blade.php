<div>
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <a href="{{route('lista_campo')}}" class="navbar-brand" style="color: white;">Lista de campo</a>
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
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h3 style="text-align: center;">EMPRESA: NOPALES MEXICA</h3>
                        <h5 style="text-align: center;">REG. UP9201526330</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5 style="text-align: center;">BIT&Aacute;CORA 3 POES 03</h5>
                        <h6 style="text-align: center;">REGISTRO DE CAMPO TABLAS</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">01 Bajada</label>
                        <br>
                        <label for="">02 Bajo Arcina</label>
                        <br>
                        <label for="">03 Arcina</label>
                    </div>
                    <div class="col">
                        <label for="">04 Pino</label>
                        <br>
                        <label for="">05 Terreno Grande</label>
                        <br>
                        <label for="">06 Extensi&oacute;n</label>
                    </div>
                    <div class="col">
                        <label for="">07 Frente Terreno Grande</label>
                        <br>
                        <label for="">08 Cueva</label>
                        <br>
                        <label for="">09 Entrada</label>
                        <br>
                    </div>
                    <div class="col">
                        <label for="">10 Curva</label>
                        <br>
                        <label for="">11 Casita del Indio</label>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form" wire:submit.prevent='save'>
                            <div class="row">
                                <div class="col">
                                    <label for="fecha">Fecha</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-regular fa-calendar-days"></i></label>
                                        <input type="text" wire:model="fecha" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="">Actividad a realizar</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-person-digging"></i></label>
                                        <select wire:click='seleccion' class="form-select @error('actividad_a_realizar') is-invalid @enderror" wire:model.lazy="actividad_a_realizar">
                                            <option value="" selected>Seleccione la actividad</option>
                                            <option value="cosecha">Cosecha</option>
                                            <option value="deshierbar">Deshierbar</option>
                                            <option value="abonar">Abonar</option>
                                            <option value="limpieza de terreno">Limpieza de terreno</option>
                                            <option value="motocultor">Motocultor</option>
                                            <option value="poda de formacion">Poda de formaci&oacute;n</option>
                                            <option value="poda de saniamiento">Poda de saniamiento</option>
                                            <option value="poda de renovacion">Poda de renovaci&oacute;n</option>
                                            <option value="control manual de plagas">Control manual de plagas</option>
                                            <option value="resiembra">Resiembra</option>
                                            <option value="siembra">Siembra</option>
                                            <option value="sacar piedra">Sacar piedra</option>
                                            <option value="barda">Barda</option>
                                        </select>
                                    </div>
                                    
                                    @error('actividad_a_realizar') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="cantidad">Cantidad/Cajas</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-hashtag"></i></label>
                                        <input type="text" wire:model="cantidad" class="form-control @error('cantidad') is-invalid @enderror">
                                    </div>
                                    @error('cantidad') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col">
                                    <label for="presentacion">Presentaci&oacute;n/tama&ntilde;o</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-gift"></i></label>
                                        <select class="form-select @error('presentacion') is-invalid @enderror" wire:model="presentacion">
                                            <option value="" >Seleccione</option>
                                            <option value="chico">Chico</option>
                                            <option value="mediano">Mediano</option>
                                            <option value="grande">Grande</option>
                                            <option value="mixto">Mixto</option>
                                        </select>
                                    </div>
                                    @error('presentacion') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col">
                                    <label for="corte">Zonda de corte/Tabla</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-table"></i></label>
                                        <select wire:click='zona' wire:model="zona_de_corte" class="form-select @error('zona_de_corte') is-invalid @enderror">
                                            <option value="" selected>Seleccione corte de caja</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                        </select>
                                    </div>
                                    @error('zona_de_corte') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                @if ($actividad_a_realizar == 'cosecha')
                                    <div class="col-7">
                                        <label for="trazabilidad">Codigo de trazabilidad</label>
                                        <div class="input-group">
                                            <label for="" class="input-group-text"><i class="fa-regular fa-font-awesome"></i></label>
                                            <input type="text" disabled wire:model.lazy="codigo_trazabilidad" class="form-control">
                                        </div>
                                    </div>
                                @endif
                                <div class="col">
                                    <label for="realizo">Realizo</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-person"></i></label>
                                        <select wire:model="realizo" class="form-select @error('realizo') is-invalid @enderror">
                                            <option value="" selected>Seleccione personal</option>
                                            <option value="juan daniel">Juan Daniel</option>
                                            <option value="yamir">Yamir</option>
                                            <option value="edgar">Edgar</option>
                                            <option value="susana">Susana</option>
                                            <option value="juan carlos">Juan Carlos</option>
                                            <option value="ruben">Ruben</option>
                                            <option value="jesus">Jesus</option>
                                            <option value="juan gabriel">Juan Gabriel</option>
                                            <option value="andy">Andy</option>
                                            <option value="noe">Noe</option>
                                        </select>
                                    </div>
                                    @error('realizo') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="card-footer">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-success">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
