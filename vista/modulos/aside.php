<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="vista/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Mini Market POS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a style="cursor:pointer;" class="nav-link" onclick="CargarContenido('vista/pages/dashboard.php','content-wrapper')">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Tabla Principal
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Productos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor:pointer;" class="nav-link" onclick="CargarContenido('vista/pages/productos.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inventario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/pages/carga_masiva.productos.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Carga Masiva</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/pages/categorias.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categorías</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/pages/ventas.php','content-wrapper')">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Ventas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/pages/compras.php','content-wrapper')">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Compras</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/pages/reportes.php','content-wrapper')">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Reportes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/pages/configuracion.php','content-wrapper')">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Configuracion</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>

    $(".nav-link").on('click', function(){

        $(".nav-link").removeClass('active');
        $(this).addClass('active');
        
    })

</script>