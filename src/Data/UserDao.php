<?php
include_once '../../Entity/conection.php';
include '../../Entity/User.php';

class UserDao extends Database{

    protected static $cnx;

    private static function getDatabase()
    {
        self::$cnx = Database::Conectar();
    }

    private static function Desconectar()
    {
        self::$cnx = null;
    }

    public static function loginUser($user)
    {
        self::getDatabase();

        $query = "SELECT *
        FROM Users
        WHERE
        Legajo = :legajo 
        AND 
        dni= :dni";

        $resultado = self::$cnx->prepare($query);
        $resultado->bindParam(":legajo",$user->getLegajo());
        $resultado->bindParam(":dni",$user->getdni());
        //var_dump($resultado);

        $resultado->execute();

        if ($resultado->rowCount() > 0) 
        {  
                return true;
        }
        return false;
    }

    public function getUser($legajo)
    {
        
        $query = "SELECT
        id_user,
        Name,
        Surname,
        email,
        id_rol,
        Legajo,
        dni
        FROM Users
        WHERE
        Legajo = :legajo";

        self::getDatabase();

        $resultado = self::$cnx->prepare($query);
        $resultado->bindParam(":legajo",$legajo->getLegajo());
        $resultado->execute();
        return $resultado->fetch(PDO::FETCH_OBJ);

    } 
}