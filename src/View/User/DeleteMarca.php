<?php

include '../../Controller/Marca.php';

    $tipo_consulta = $_POST['tipo_operacion']; 
    switch($tipo_consulta){
        case 'eliminar':
            $id_marca = ($_POST["id_marca"]);
            $pvd = new Marca();
            $pvd-> setId_marca($id_marca);
            $consulta = new MarcaDao();
            $ejecutar = $consulta->Delete($pvd);
            echo json_encode($ejecutar);
            break;

    }