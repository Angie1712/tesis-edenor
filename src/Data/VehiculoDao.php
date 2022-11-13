<?php
require_once '../../Entity/conection.php';
require_once '../../Entity/Vehiculo.php';

class VehiculoDao extends Database
{
    protected static $cnx;

    private static function getDatabase()
    {
        self::$cnx = Database::Conectar();
    }

    private static function Desconectar()
    {
        self::$cnx = null;
    }

    public static function searchVehiculo()
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			self::getDatabase();
			$query = "SELECT
			id_vehiculo,
            Patente,
            Modelo.Modelo,
            Marca.Marca
			FROM `Vehiculos`
            JOIN Modelo ON Vehiculos.id_modelo = Modelo.id_modelo
            JOIN Marca on Modelo.id_marca = Marca.id_marca";
			$resultado = self::$cnx->prepare($query);
			//Ejecución de la sentencia SQL.
			$resultado->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $resultado->fetchAll(PDO::FETCH_OBJ);
	
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
}
}