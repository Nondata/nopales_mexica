<div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center my-2">Nopales Mexica</h1>
            </div>
            <div class="col"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form wire:submit.prevent="submitAccess">
                            <br>
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control mt-2 @error('nombre') is-invalid @enderror" wire:model="nombre" id="nombre">
                            @error('nombre') <span class="error text-danger h6">{{$message}}</span> @enderror
                            <br>
                            <label for="password">Contrase&ntilde;a</label>
                            <input type="password" class="form-control mt-2 @error('password') is-invalid @enderror" wire:model="password" id="password">
                            @error('password') <span class="error text-danger h6">{{$message}}</span> @enderror
                            <br>
                            <div class="card-footer">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary">Ingresar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
