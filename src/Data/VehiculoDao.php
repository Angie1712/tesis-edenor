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
		public static function searchModelo()
		{
			try
			{
				//Sentencia SQL para selección de datos utilizando
				self::getDatabase();
				$query = "SELECT
				id_modelo, 
				Modelo
				FROM Modelo";
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
		public static function CreateVehiculo($vehiclo)
		{	
			$query = "INSERT INTO Vehiculos 
			(Patente,
			id_Modelo) 
			VALUES
			(:Patente,
			:id_Modelo)";
			self::getDatabase();
			$resultado = self::$cnx->prepare($query);
			$resultado->bindParam(":Patente", $vehiclo->getPatente());
			$resultado->bindParam(":id_Modelo", $vehiclo->getId_Modelo());
			if ($resultado->execute()){
				return true;
			}
	
			return false;
		}

		public static function Update($date)
		{
			try{
				$query = "UPDATE Vehiculos
				SET
				id_modelo = :id_modelo
				WHERE patente = :patente";
				$resultado = self::$cnx->prepare($query);
				$resultado->bindParam(":id_modelo",$date->getId_Modelo());
				$resultado->bindParam(":patente", $date->getPatente());
				$resultado->execute();
			}catch (Exception $e)
			{
				die($e->getMessage());
			}
		}

		public static function Listar($patente){
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
            JOIN Marca on Modelo.id_marca = Marca.id_marca
			WHERE Patente = :patente";
			$resultado = self::$cnx->prepare($query);
			$resultado->bindParam(":patente", $patente->getPatente());
			//Ejecución de la sentencia SQL.
			$resultado->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $resultado->fetch(PDO::FETCH_OBJ);
	
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
		}

		public static function Delete($patente){
			try{
				self::getDatabase();
				$query = " DELETE 
				FROM 
				Vehiculos
				WHERE Patente = :Patente";
				$resultado = self::$cnx->prepare($query);
				$resultado->bindParam(":Patente", $patente->getPatente());
				$resultado->execute();
				return $resultado->fetch(PDO::FETCH_OBJ);
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}
}