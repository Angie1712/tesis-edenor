<?php

include '../../Controller/User.php';

$resultado = array();


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["email"]) && isset($_POST["dni"]) && isset($_POST["legajo"]) && isset($_POST["id_rol"])){
        $name = ($_POST["name"]);
        $surname = ($_POST["surname"]);
        $email = ($_POST["email"]);
        $dni = ($_POST["dni"]);
        $legajo = ($_POST["legajo"]);
        $rol = ($_POST["id_rol"]);
        if(UserController::CreatUser($name,$surname,$email,$dni,$legajo,$rol)){
            echo'<script> window.location.href = "Usuarios.php"; </script>';
        }
    }
}