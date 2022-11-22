<?php

include '../../Controller/Vehiculo.php';

    $tipo_consulta = $_POST['tipo_operacion']; 
    switch($tipo_consulta){
        case 'eliminar':
            $patente = ($_POST["patente"]);
            $pvd = new Vehiculo();
            $pvd-> setPatente($patente);
            $consulta = new VehiculoDao();
            $ejecutar = $consulta->Delete($pvd);
            echo json_encode($ejecutar);
            break;

    }


    // if(isset($_POST["patente"])){
    //     $patente = ($_POST["patente"]);
    //     if(VehiculoController::Delete($patente)){
    //         echo'<script> window.location.href = "index.php"; </script>';
    //     }
    // }
