<?php

include '../../Controller/Modelo.php';

    $tipo_consulta = $_POST['tipo_operacion']; 
    switch($tipo_consulta){
        case 'eliminar':
            $id_modelo = ($_POST["id_modelo"]);
            $pvd = new Modelo();
            $pvd-> setId_modelo($id_modelo);
            $consulta = new ModeloDao();
            $ejecutar = $consulta->Delete($pvd);
            echo json_encode($ejecutar);
            break;

    }