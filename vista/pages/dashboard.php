<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tablero Principal</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Tablero Principal</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <!--**************TOTAL DE PRODUCTOS****************-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4 id="totalProductos">125</h4>

                        <p>Productos Registrados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor: pointer;" onclick="abrirUrl('vista/pages/productos.php','content-wrapper')" 
                        class="small-box-footer">Mas Información<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!--**************TOTAL DE COMPRAS****************-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4 id="totalCompras">S/. 2,500.00</h4>

                        <p>Total de Compras</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <a style="cursor: pointer;" onclick="abrirUrl('vista/pages/productos.php','content-wrapper')" 
                        class="small-box-footer">Mas Información<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!--**************TOTAL DE VENTAS****************-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4 id="totalVentas">S/. 1,200.00</h4>

                        <p>Total de Ventas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor: pointer;" onclick="abrirUrl('vista/pages/productos.php','content-wrapper')" 
                        class="small-box-footer">Mas Información<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!--**************TOTAL DE GANANCIAS****************-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4 id="totalGanancias">S/. 470.00</h4>

                        <p>Total de Ganacias</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor: pointer;" onclick="abrirUrl('vista/pages/productos.php','content-wrapper')" 
                        class="small-box-footer">Mas Información<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!--**************TOTAL DE PRODUCTOS MINIMO STOCK****************-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4 id="totalProductosMInStock">15</h4>

                        <p>Productos Poco Stock</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor: pointer;" onclick="abrirUrl('vista/pages/productos.php','content-wrapper')" 
                        class="small-box-footer">Mas Información<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!--**************TOTAL DE VIA ACTUAL****************-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4 id="totalVentasHoy">S/. 250.00</h4>

                        <p>Ventas del día</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor: pointer;" onclick="abrirUrl('vista/pages/productos.php','content-wrapper')" 
                        class="small-box-footer">Mas Información<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            



        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->