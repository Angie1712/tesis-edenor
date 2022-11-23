<?php

include '../../Controller/Reclamo.php';

$resultado = array();


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["Vehiculo"]) && isset($_POST["tipo_reclamo"]) && isset($_POST["detalle"])){
        $Vehiculo = ($_POST["Vehiculo"]);
        $tipo_reclamo = ($_POST["tipo_reclamo"]);
        $datelle = ($_POST["detalle"]);
        if(ReclamoController::CreatReclamo($Vehiculo, $tipo_reclamo, $datelle)){
            echo'<script> window.location.href = "Reclamos.php"; </script>';
        }
    }
}