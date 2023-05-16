<div>
    <div class="container mt-5">
        <div class="row">
            <div class="col"></div>
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center my-2">Nopales Mexica</h1>
                    </div>
                    <form wire:submit.prevent="submitAccess">
                        <div class="card-body">
                            <br>
                            <label for="nombre">Nombre</label>
                            <div class="input-group ">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-user"></i></span>
                                <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                    wire:model="nombre" id="nombre">
                                </div>
                                @error('nombre')
                                    <span class="error text-danger h6">{{ $message }}</span>
                                @enderror
                            <br>
                            <label for="password">Contrase&ntilde;a</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    wire:model="password" id="password">
                            </div>
                            @error('password')
                                <span class="error text-danger h6">{{ $message }}</span>
                            @enderror
                            <br>
                            @error('errorlogin')
                                <span class="error text-danger bg-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="card-footer">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary">Ingresar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
