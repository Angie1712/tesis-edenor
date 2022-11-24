<?php
include_once '../../Entity/conection.php';
include '../../Entity/Modelo.php';

class ModeloDao extends Database
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

    public static function searchModelo()
		{
			try
			{
				//Sentencia SQL para selección de datos utilizando
				self::getDatabase();
				$query = "SELECT
				id_modelo, 
				Modelo,
                Marca.Marca
				FROM Modelo
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

        public static function Listar($modelo){
			try
		{
			//Sentencia SQL para selección de datos utilizando
			self::getDatabase();
			$query = "SELECT
			id_modelo,
            Modelo,
            Marca.Marca
			FROM `Modelo`
            JOIN Marca on Modelo.id_marca = Marca.id_marca
			WHERE id_modelo = :id_modelo";
			$resultado = self::$cnx->prepare($query);
			$resultado->bindParam(":id_modelo", $modelo->getId_modelo());
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
				$query = "UPDATE Modelo
				SET
				modelo = :modelo,
                id_marca = :id_marca
				WHERE id_modelo = :id_modelo";
				$resultado = self::$cnx->prepare($query);
				$resultado->bindParam(":id_modelo",$date->getId_modelo());
				$resultado->bindParam(":modelo", $date->getModelo());
                $resultado->bindParam(":id_marca",$date->getId_marca());
				$resultado->execute();
			}catch (Exception $e)
			{
				die($e->getMessage());
			}
		}

		public static function CreatModelo($modelo){
            self::getDatabase();
			$query = "INSERT INTO Modelo
			(Modelo,
            id_marca)
			VALUES
			(:modelo,
            :id_marca)";
			self::getDatabase();
			$resultado = self::$cnx->prepare($query);
			$resultado->bindParam(":modelo", $modelo->getModelo());
            $resultado->bindParam(":id_marca", $modelo->getId_marca());
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
				Modelo
				WHERE id_modelo = :id_modelo";
				$resultado = self::$cnx->prepare($query);
				$resultado->bindParam(":id_modelo", $marca->getId_modelo());
				$resultado->execute();
				return $resultado->fetch(PDO::FETCH_OBJ);
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}
}