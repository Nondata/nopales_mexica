<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('admin')}}">Home</a>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('nuevo-usuario') }}">Nuevo trabajador</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('exportar') }}">Descargar reporte</a>
              </li>
            </ul>
          </div>
          <a class="nav-link" wire:click='cerrar_sesion' href="#">cerrar sesion</a>
        </div>
      </nav>
</div>
