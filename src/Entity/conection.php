<?php

class Database
{
    public static function Conectar()
    {   
        $host = getenv('MYSQL_SERVER');
        $dbname = getenv('SQL_DATABASE');
        $user = getenv('MYSQL_USER');
        $password = getenv('MYSQL_PASSWORD');
        $con= 'mysql:host='.$host.';dbname='.$dbname.';charset=utf8';
        $pdo = new PDO($con, $user,$password );

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}


    
?>