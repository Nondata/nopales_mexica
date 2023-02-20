<div>
    <div class="container">
		<div class="row">
			<div class="col">
				@if (session() ->has('message'))
					<div class="alert alert-success text-center">
						{{ session('message') }}
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
                            <input type="text" wire:model="nombre" class="form-control @error('nombre') is-invalid @enderror">
							@error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                            <br>
                            <label for="apellidos">Apellidos</label>
                            <input type="text" wire:model="apellidos" class="form-control @error('apellidos') is-invalid @enderror">
							@error('apellidos') <span class="error text-danger">{{ $message }}</span> @enderror
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="area">Area</label>
                                    <select wire:model="area" class="form-select @error('area') is-invalid @enderror">
                                        <option value="" selected>Seleccione un area</option>
                                        <option value="recepcion">Recepci&oacute;n</option>
                                        <option value="pelado">Pelado</option>
                                        <option value="coccion">Cocci&oacute;n</option>
                                        <option value="empacado">Empacado</option>
                                        <option value="administracion">Administracion</option>
                                    </select>
									@error('area') <span class="error text-danger"> {{$message}} </span> @enderror
                                </div>
                                <div class="col">
                                    <label for="carg">Cargo</label>
                                    <select wire:model="cargo" class="form-select @error('cargo') is-invalid @enderror">
                                        <option value="" selected>Seleccione cargo</option>
                                        <option value="encargado">Encargado</option>
                                        <option value="trabajador">Trabajador</option>
                                        <option value="administrador">Administrador</option>
                                    </select>
									@error('cargo') <span class="error text-danger"> {{$message}} </span> @enderror
                                </div>
                            </div>
                            <br>
                            <label for="password">Contrase&ntilde;a</label>
                            <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror">
							@error('password') <span class="error text-danger"> {{$message}} </span> @enderror
                            <br>
                            <label for="confirmPassword">Confirmar contrase&ntilde;a</label>
                            <input type="password" wire:model="confirmPassword" class="form-control @error('confirmPassword') is-invalid @enderror">
							@error('confirmPassword') <span class="error text-danger"> {{$message}} </span> @enderror
                            <br>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
