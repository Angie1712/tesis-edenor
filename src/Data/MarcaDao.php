<?php
include_once '../../Entity/conection.php';
include '../../Entity/Marca.php';

class MarcaDao extends Database
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

    public static function searchMarca()
		{
			try
			{
				//Sentencia SQL para selección de datos utilizando
				self::getDatabase();
				$query = "SELECT
				id_marca, 
				Marca
				FROM Marca";
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

        public static function Listar($marca){
			try
		{
			//Sentencia SQL para selección de datos utilizando
			self::getDatabase();
			$query = "SELECT
			id_marca,
            Marca
			FROM `Marca`
			WHERE id_marca = :id_marca";
			$resultado = self::$cnx->prepare($query);
			$resultado->bindParam(":id_marca", $marca->getId_marca());
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

        public static function Update($date)
		{
			try{
				$query = "UPDATE Marca
				SET
				marca = :marca
				WHERE id_marca = :id_marca";
				$resultado = self::$cnx->prepare($query);
				$resultado->bindParam(":id_marca",$date->getId_marca());
				$resultado->bindParam(":marca", $date->getMarca());
				$resultado->execute();
			}catch (Exception $e)
			{
				die($e->getMessage());
			}
		}

		public static function CreatMarca($marca){
            self::getDatabase();
			$query = "INSERT INTO Marca
			(Marca)
			VALUES
			(:Marca)";
			self::getDatabase();
			$resultado = self::$cnx->prepare($query);
			$resultado->bindParam(":Marca", $marca->getMarca());
			if ($resultado->execute()){
				return true;
			}
	
			return false;
        }
		public static function Delete($marca){
			try{
				self::getDatabase();
				$query = " DELETE 
				FROM 
				Marca
				WHERE id_marca = :id_marca";
				$resultado = self::$cnx->prepare($query);
				$resultado->bindParam(":id_marca", $marca->getId_marca());
				$resultado->execute();
				return $resultado->fetch(PDO::FETCH_OBJ);
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}
}