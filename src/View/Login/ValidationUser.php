<?php

session_start();

include '../../Controller/User.php';
header('Content-Type: application/json; charset=utf-8');

$resultado = array();


if(isset($_POST["legajo"])&& isset($_POST["dni"])){
    $txtDni = $_POST["dni"];
    $txtLegajo = $_POST["legajo"];

    $resultado = array("estado" => true);

    if(UserController::loginUser($txtDni, $txtLegajo))
    {
        $user = UserController::getUser($txtDni, $txtLegajo);
        $_SESSION["dni"] = array(
            "id"       => $user->id_user,
            "username" => $user->user,
            "role"     => $user->id_rol
            ); 
        return print (json_encode($resultado));
    }
}

$resultado = array("estado" => false);
return print (json_encode($resultado));