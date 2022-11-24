<?php

include '../../Controller/Modelo.php';

$resultado = array();


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["modelo"]) && isset($_POST["id_marca"])){
        $Modelo = ($_POST["modelo"]);
        $Marca = ($_POST["id_marca"]);
        if(ModeloController::CreatModelo($Modelo,$Marca)){
            echo'<script> window.location.href = "Modelo.php"; </script>';
        }
    }
}