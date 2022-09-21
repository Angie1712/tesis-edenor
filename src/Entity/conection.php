<?php

class Database {

    public static function Conectar(){
        $host = getenv('MYSQL_SERVER');
        $dbName = getenv('SQL_DATABASE');
        $user = getenv('MYSQL_USER');
        $password = getenv('MYSQL_PASSWORD');
        $conection = 'mysql:host='.$host.';dbname='.$dbName.';charset=utf8';

        $pdo = new PDO($conection, $user, $password); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
?>