<?php

    require_once "conexion.php";

    class DashboardModelo{

        static public function mdlGetDatosDashboard(){

            $stmt = Conexion::conectar()->prepare('call PRC_OBTENERDATOSDASHBOARD()');

            $stmt->execute();

            return $stmt -> fetchAll(PDO::FETCH_OBJ);
        }

    }

?>