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
                        <h4 id="totalProductos"></h4>

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
                        <h4 id="totalCompras"></h4>

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
                        <h4 id="totalVentas"></h4>

                        <p>Total de Ventas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-cart"></i>
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
                        <h4 id="totalGanancias"></h4>

                        <p>Total de Ganacias</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-pie"></i>
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
                        <h4 id="totalProductosMInStock"></h4>

                        <p>Productos Poco Stock</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-remove-circle"></i>
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
                        <h4 id="totalVentasHoy"></h4>

                        <p>Ventas del día</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-calendar"></i>
                    </div>
                    <a style="cursor: pointer;" onclick="abrirUrl('vista/pages/productos.php','content-wrapper')" 
                        class="small-box-footer">Mas Información<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-12">
                <div class="card-info">
                    <div class="card-header">
                        <h3 class="card-title">Ventas del Mes: S/. 1,200.00</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<script>
    $(document).ready(function(){

        /*
        **************************SOLICITUD DE TARJETAS INFORMATIVAS DEL DASHBOAR***********************************
        */ 

        $.ajax({
            url:"ajax/dashboard.ajax.php",
            method:"POST",
            dataType: 'json',
            success: function(respuesta){
                console.log("respuesta", respuesta);
                $("#totalProductos").html(respuesta[0]['totalProductos']);
                $("#totalCompras").html('S/. ' + respuesta[0]['totalCompras'].replace(/\d(?=(\d{3})+\.)/g, "$&, "));
                $("#totalVentas").html('S/. ' + respuesta[0]['totalVentas'].replace(/\d(?=(\d{3})+\.)/g, "$&, "));
                $("#totalGanancias").html('S/. ' + respuesta[0]['ganancias'].replace(/\d(?=(\d{3})+\.)/g, "$&, "));
                $("#totalProductosMInStock").html(respuesta[0]['productosPocoStock']);
                $("#totalVentasHoy").html('S/. ' + respuesta[0]['ventasHoy'].replace(/\d(?=(\d{3})+\.)/g, "$&, "));
            }
        });
        /*
        ************************************************************************************************************
        */ 
       /*
        **************************CONFIGURACION DE INTERVALO DE ACTUALIZACION CADA 10 SEGUNDOS**********************
        */ 

        setInterval(() =>{
            $.ajax({
            url:"ajax/dashboard.ajax.php",
            method:"POST",
            dataType: 'json',
            success: function(respuesta){
                console.log("respuesta", respuesta);
                $("#totalProductos").html(respuesta[0]['totalProductos']);
                $("#totalCompras").html('S/. ' + respuesta[0]['totalCompras'].replace(/\d(?=(\d{3})+\.)/g, "$&, "));
                $("#totalVentas").html('S/. ' + respuesta[0]['totalVentas'].replace(/\d(?=(\d{3})+\.)/g, "$&, "));
                $("#totalGanancias").html('S/. ' + respuesta[0]['ganancias'].replace(/\d(?=(\d{3})+\.)/g, "$&, "));
                $("#totalProductosMInStock").html(respuesta[0]['productosPocoStock']);
                $("#totalVentasHoy").html('S/. ' + respuesta[0]['ventasHoy'].replace(/\d(?=(\d{3})+\.)/g, "$&, "));
            }
        });
        }, 10000);
        /*
        ************************************************************************************************************
        */ 
    });
</script>