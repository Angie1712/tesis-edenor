<?php

include '../../Controller/Marca.php';

$resultado = array();


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["marca"])){
        $Marca = ($_POST["marca"]);
        if(MarcaController::CreatMarca($Marca)){
            echo'<script> window.location.href = "Marca.php"; </script>';
        }
    }
}