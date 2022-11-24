<?php

include '../../Controller/User.php';

    $tipo_consulta = $_POST['tipo_operacion']; 
    switch($tipo_consulta){
        case 'eliminar':
            $id_user = ($_POST["id_user"]);
            $pvd = new User();
            $pvd-> setId($id_user);
            $consulta = new UserDao();
            $ejecutar = $consulta->Delete($pvd);
            echo json_encode($ejecutar);
            break;

    }