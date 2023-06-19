<div>
    <style>
        .sidebar {
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 1000;
            display: block;
            padding: 20px;
            overflow-x: hidden;
            overflow-y: auto;
            width: 180px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/cdb.min.css" />
    <div class="app main toggled hide" style="display:flexbox; height: 110vh; position: absolute">
        <div class="sidebar bg-dark bg-gradient text-white" id="sidebar-nav" role="cdb-sidebar">
            <div class="sidebar-container">
                <div class="sidebar-header text-center">
                    <a class="sidebar-toggler"><i class="fa fa-bars"></i></a>
                    <a class="sidebar-brand">Nopales Mexica</a>
                </div>

                <div class="sidebar-nav">
                    <div class="sidenav">
                        <a href="{{ route('admin') }}" class="sidebar-item">
                            <i class="fa-solid fa-house-chimney sidebar-icon"></i>
                            <span>Inicio</span>
                        </a>
                    </div>
                    <div class="sidenav">
                        <a href="{{ route('producto') }}" class="sidebar-item">
                            <i class="fa-solid fa-box sidebar-icon"></i>
                            <span>Productos</span>
                        </a>
                    </div>
                    <div class="sidenav">
                        <a href="{{ route('salidas') }}" class="sidebar-item">
                            <i class="fa-solid fa-car-side sidebar-icon"></i>
                            <span>Salidas</span>
                        </a>
                    </div>
                    <div class="sidenav">
                        <a href="{{ route('exportar') }}" class="sidebar-item">
                            <i class="fa-solid fa-file-export sidebar-icon"></i>
                            <span>Descargar Reporte</span>
                        </a>
                    </div>
                </div>

                <div class="sidebar-footer">
                    <a wire:click='cerrar_sesion' href="#">
                        <i class="fa-solid fa-right-from-bracket sidebar-item"></i>
                        <span>Cerrar Sesi&oacute;n</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/cdb.min.js"></script>
    <script>
        const sidebarNav = document.querySelector('#sidebar-nav');
        new CDB.Sidebar(sidebarNav);
    </script>
</div>
