<?php

include '../../Controller/Reclamo.php';
include '../../Controller/Vehiculo.php';

    $tipo_consulta = $_POST['tipo_operacion']; 
    switch($tipo_consulta){
        case 'eliminar':
            $id_reclamo = ($_POST["id_reclamo"]);
            $pvd = new Reclamo();
            $pvd-> setId_Reclamo($id_reclamo);
            $consulta = new ReclamoDao();
            $ejecutar = $consulta->Delete($pvd);
            echo json_encode($ejecutar);
            break;

    }