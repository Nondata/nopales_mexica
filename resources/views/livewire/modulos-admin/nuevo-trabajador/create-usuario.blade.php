<div>
    <div class="container">
		<div class="row">
			<div class="col">
				@if (session()->has('message'))
					<div class="alert alert-success text-center">
						{{ session('message') }}
					</div>
				@endif
				@if (session()->has('error'))
					<div class="alert alert-danger">
						{{session('error')}}
					</div>
				@endif	
			</div>
		</div>
        <div class="row">
            <div class="col"></div>
            <div class="col-8 mt-3">
                <div class="card">
                    <div class="card-body">
                        <form wire:submit.prevent="submit">
                            <h5 class="card-title" style="text-align: center;">Nuevo trabajador</h5>
                            <label for="nombre">Nombre</label>
                            <div class="input-group">
                                <label for="" class="input-group-text"><i class="fa-solid fa-person"></i></label>
                                <input type="text" wire:model="nombre" class="form-control @error('nombre') is-invalid @enderror">
                            </div>
							@error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                            <br>
                            <label for="apellidos">Apellidos</label>
                            <input type="text" wire:model="apellidos" class="form-control @error('apellidos') is-invalid @enderror">
							@error('apellidos') <span class="error text-danger">{{ $message }}</span> @enderror
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="area">Area</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-warehouse"></i></label>
                                        <select wire:model="area" class="form-select @error('area') is-invalid @enderror">
                                            <option value="" selected>Seleccione un area</option>
                                            <option value="campo">Campo</option>
                                            <option value="desespinado">Desespinado</option>
                                            <option value="recepcion">Recepci&oacute;n</option>
                                            <option value="produccion">Producci&oacute;n</option>
                                            <option value="empaque">Empaque</option>
                                            <option value="administracion">Administraci&oacute;n</option>
                                        </select>
                                    </div>
									@error('area') <span class="error text-danger"> {{$message}} </span> @enderror
                                </div>
                                <div class="col">
                                    <label for="carg">Cargo</label>
                                    <div class="input-group">
                                        <label for="" class="input-group-text"><i class="fa-solid fa-certificate"></i></label>
                                        <select wire:model="cargo" class="form-select @error('cargo') is-invalid @enderror">
                                            <option value="" selected>Seleccione cargo</option>
                                            <option value="encargado">Encargado</option>
                                            <option value="administrador">Administrador</option>
                                        </select>
                                    </div>
									@error('cargo') <span class="error text-danger"> {{$message}} </span> @enderror
                                </div>
                            </div>
                            <br>
                            <label for="password">Contrase&ntilde;a</label>
                            <div class="input-group">
                                <label for="" class="input-group-text"><i class="fa-solid fa-key"></i></label>
                                <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror">
                            </div>
							@error('password') <span class="error text-danger"> {{$message}} </span> @enderror
                            <br>
                            <label for="confirmPassword">Confirmar contrase&ntilde;a</label>
                            <input type="password" wire:model="confirmPassword" class="form-control @error('confirmPassword') is-invalid @enderror">
							@error('confirmPassword') <span class="error text-danger"> {{$message}} </span> @enderror
                            <br>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
