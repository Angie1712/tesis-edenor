<?php

include '../../Controller/Vehiculo.php';

$resultado = array();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["patente"]) && isset($_POST["id_modelo"])){
        $patente = ($_POST["patente"]);
        $id_modelo = ($_POST["id_modelo"]);
        if(VehiculoController::CreatVehiculo($patente, $id_modelo)){
            echo'<script> window.location.href = "index.php"; </script>';
        }
    }
}