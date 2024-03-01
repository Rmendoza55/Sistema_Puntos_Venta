<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Puntos de Venta</title>

    <!--**********************STYLES*****************************-->
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="vista/assets/dist/img/AdminLTELogo.png" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="vista/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme Style -->
    <link rel="stylesheet" href="vista/assets/dist/css/adminlte.min.css">

    <!--**********************SCRIPTS*****************************-->

    <!-- jQuery -->
    <script src="vista/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="vista/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="vista/assets/dist/js/adminlte.min.js"></script>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!--******INCLUSION DE MODULOS HTML********-->
        <?php

        include "modulos/navbar.php";
        include "modulos/aside.php";

        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?php

            include "pages/dashboard.php";

            ?>

        </div>
        <!-- /.content-wrapper -->

        <?php

        include "modulos/footer.php";

        ?>


    </div>
    <!-- ./wrapper -->

    <script>
        function CargarContenido(pagina_php, contenedor) {
            $("." + contenedor).load(pagina_php);
        }
    </script>

</body>

</html>