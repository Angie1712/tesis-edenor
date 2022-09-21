<?php
include '../Entity/conection.php';

class LoginDao extends Database {
    protected static $cnx;

    private static function getDatabase(){
        self::$cnx = Database::Conectar(); 
    }

    private static function desconectar(){
        self::$cnx = null; 
    }

    public static function login($user){
        return true; 
    }
}

?>