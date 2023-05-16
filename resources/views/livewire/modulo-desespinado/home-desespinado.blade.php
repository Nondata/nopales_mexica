<div>
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <a style="color: white;" href="{{ route('lista_desespinado') }}" class="navbar-brand">Lista de desespinado</a>
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
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 style="text-align: center;">Registro de desespinado</h5>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="save" class="form">
                            <div class="row">
                                <div class="col">
                                    <label for="fecha">Fecha</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-calendar-days"></i></label>
                                        <input type="text" wire:model="fecha"  disabled class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="nombre">Nombre</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-person"></i></label>
                                        <select wire:model="nombre" class="form-select @error('nombre') is-invalid @enderror">
                                            <option value="">Seleccione</option>
                                            <option value="alejandra">Alejandra</option>
                                            <option value="paola">Paola</option>
                                            <option value="reyna">Reyna</option>
                                            <option value="tania">Tania</option>
                                            <option value="laura">Laura</option>
                                            <option value="juan daniel">Juan Daniel</option>
                                        </select>
                                    </div>
                                    @error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="kg_pelado">Kg pelados</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-hashtag"></i></label>
                                        <input type="text" wire:model="kg_pelado" class="form-control @error('kg_pelado') is-invalid @enderror">
                                    </div>
                                    @error('kg_pelado') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col">
                                    <label for="piezas_peladas">Piezas peladas</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-scissors"></i></label>
                                        <input type="text" wire:model="piezas_peladas" class="form-control @error('piezas_peladas') is-invalid @enderror">
                                    </div>
                                    @error('piezas_peladas') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <br>
                            <textarea wire:model="observaciones" placeholder="Observaciones" class="form-control" cols="20" rows="4"></textarea>
                            <br>
                        </div>
                        <div class="card-footer">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-success">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <br>
            </div>
        </div>
    </div>
</div>
