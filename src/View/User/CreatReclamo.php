<?php

include '../../Controller/Reclamo.php';

$resultado = array();


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["Vehiculo"]) && isset($_POST["tipo_reclamo"]) && isset($_POST["detalle"]) && isset($_POST["id_user"])){
        $Vehiculo = ($_POST["Vehiculo"]);
        $tipo_reclamo = ($_POST["tipo_reclamo"]);
        $datelle = ($_POST["detalle"]);
        $id_user = ($_POST["id_user"]);
        if(ReclamoController::CreatReclamo($Vehiculo, $tipo_reclamo, $datelle, $id_user)){
            echo'<script> window.location.href = "Reclamos.php"; </script>';
        }
    }
}