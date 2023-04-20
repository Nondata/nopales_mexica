<div>
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
                <form wire:submit.prevent="save" class="form">
                    <div class="row">
                        <div class="col">
                            <label for="fecha">Fecha</label>
                            <input type="text" wire:model="fecha"  disabled class="form-control">
                        </div>
                        <div class="col">
                            <label for="nombre">Nombre</label>
                            <select wire:model="nombre" class="form-select @error('nombre') is-invalid @enderror">
                                <option value="">Seleccione</option>
                                <option value="alejandra">Alejandra</option>
                                <option value="paola">Paola</option>
                                <option value="reyna">Reyna</option>
                                <option value="tania">Tania</option>
                                <option value="laura">Laura</option>
                                <option value="juan daniel">Juan Daniel</option>
                            </select>
                            @error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="kg_pelado">Kg pelados</label>
                            <input type="text" wire:model="kg_pelado" class="form-control @error('kg_pelado') is-invalid @enderror">
                            @error('kg_pelado') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col">
                            <label for="piezas_peladas">Piezas peladas</label>
                            <input type="text" wire:model="piezas_peladas" class="form-control @error('piezas_peladas') is-invalid @enderror">
                            @error('piezas_peladas') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <br>
                    <textarea wire:model="observaciones" placeholder="Observaciones" class="form-control" cols="20" rows="4"></textarea>
                    <br>
                    <button class="btn btn-success">Guardar</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>
