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
                        <form wire:submit.prevent="save">
                            <h5 class="card-title" style="text-align: center;">Edit trabajador</h5>
                            <label for="nombre">Nombre</label>
                            <input type="text" wire:model="user.nombre" class="form-control @error('nombre') is-invalid @enderror">
							@error('user.nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                            <br>
                            <label for="apellidos">Apellidos</label>
                            <input type="text" wire:model="user.apellidos" class="form-control @error('apellidos') is-invalid @enderror">
							@error('user.apellidos') <span class="error text-danger">{{ $message }}</span> @enderror
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="area">Area</label>
                                    <select wire:model="user.area" class="form-select @error('area') is-invalid @enderror">
                                        <option value="">Seleccione un area</option>
                                        <option value="campo" @if ('user.area' == 'campo') selected @endif>Campo</option>
                                        <option value="desespinado" @if ('user.area' == 'desespinado') selected @endif>Desespinado</option>
                                        <option value="recepcion" @if ('user.area' == 'recepcion') selected @endif>Recepci&oacute;n</option>
                                        <option value="produccion" @if ('user.area' == 'produccion') selected @endif>Producci&oacute;n</option>
                                        <option value="almacen" @if('user.area' == 'almacen') selected @endif>Almacen</option>
                                        <option value="administracion" @if ('user.area' == 'administracion') selected @endif>Administracion</option>
                                    </select>
									@error('user.area') <span class="error text-danger"> {{$message}} </span> @enderror
                                </div>
                                <div class="col">
                                    <label for="cargo">Cargo</label>
                                    <select wire:model="user.cargo" class="form-select @error('cargo') is-invalid @enderror">
                                        <option value="">Seleccione cargo</option>
                                        <option value="encargado" @if ('user.cargo' == 'encargado') selected @endif>Encargado</option>
                                        <option value="administrador" @if ('user.cargo' == 'administrador') selected @endif>Administrador</option>
                                    </select>
									@error('user.cargo') <span class="error text-danger"> {{$message}} </span> @enderror
                                </div>
                            </div>
                            <br>
                            <label for="password">Contrase&ntilde;a</label>
                            <input type="password" wire:model="password1" placeholder="Si no va a cambiar la contraseña, deje el campo vacio" class="form-control @error('password1') is-invalid @enderror">
							@error('user.password') <span class="error text-danger"> {{$message}} </span> @enderror
                            <br>
                            <label for="confirmPassword">Confirmar contrase&ntilde;a</label>
                            <input type="password" wire:model="confirmPassword" class="form-control @error('confirmPassword') is-invalid @enderror">
							@error('confirmPassword') <span class="error text-danger"> {{$message}} </span> @enderror
                            <br>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-warning">Actualizar</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>

