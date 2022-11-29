<?php
include_once '../../Entity/conection.php';
include '../../Entity/Reclamo.php';
include '../../Entity/User.php';

class ReclamoDao extends Database{
    protected static $cnx;

    private static function getDatabase()
    {
        self::$cnx = Database::Conectar();
    }

    private static function Desconectar()
    {
        self::$cnx = null;
    }

    public static function CreatReclamo($reclamo){
            self::getDatabase();
			$query = "INSERT INTO Reclamos
			(Reclamo,
			id_user,
            id_vehiculo,
            id_tipo_reclamo,
            id_estado) 
			VALUES
			(:Reclamo,
            :id_user,
			:id_vehiculo,
            :id_tipo_reclamo,
            1)";
			self::getDatabase();
			$resultado = self::$cnx->prepare($query);
			$resultado->bindParam(":Reclamo", $reclamo->getReclamo());
			$resultado->bindParam(":id_user", $reclamo->getId_user());
            $resultado->bindParam(":id_vehiculo", $reclamo->getId_vehiculo());
            $resultado->bindParam(":id_tipo_reclamo", $reclamo->getId_tipo_reclamo());
			if ($resultado->execute()){
				return true;
			}
	
			return false;
        }
        public static function SearchReclamo($id_user)
        {
            self::getDatabase();
            $query="SELECT 
			id_Reclamo,
            Reclamo,
			id_user,
            Vehiculo.id_modelo,
            Modelo.Modelo,
            Vehiculo.Patente,
            Tipo_reclamo.Tipo_reclamo,
            Estado.detail_estado,
            fecha
            FROM `Reclamos` 
            JOIN Estado ON Reclamos.id_estado = Estado.id_estado
            JOIN Vehiculo ON Reclamos.id_vehiculo = Vehiculo.id_vehiculo
            JOIN Modelo ON Vehiculo.id_modelo = Modelo.id_modelo
            JOIN Tipo_reclamo on Reclamos.id_tipo_reclamo = Tipo_reclamo.id_tipo_reclamo
			WHERE id_user = :id_user";
            $resultado = self::$cnx->prepare($query);
			$resultado->bindParam(":id_user", $id_user->getId());
			//Ejecución de la sentencia SQL.
			$resultado->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $resultado->fetchAll(PDO::FETCH_OBJ);
        }

        public static function Listar($id_Reclamo){
			try
		{
			//Sentencia SQL para selección de datos utilizando
			self::getDatabase();
			$query = "SELECT
			id_Reclamo,
			Reclamo,
            Modelo.Modelo,
            Vehiculo.Patente,
            Tipo_reclamo.Tipo_reclamo,
            Estado.detail_estado
            FROM `Reclamos` 
            JOIN Estado ON Reclamos.id_estado = Estado.id_estado
            JOIN Vehiculo ON Reclamos.id_vehiculo = Vehiculo.id_vehiculo
            JOIN Modelo ON Vehiculo.id_modelo = Modelo.id_modelo
            JOIN Tipo_reclamo on Reclamos.id_tipo_reclamo = Tipo_reclamo.id_tipo_reclamo
            WHERE id_Reclamo = :id_Reclamo";
			$resultado = self::$cnx->prepare($query);
			$resultado->bindParam(":id_Reclamo", $id_Reclamo->getId_Reclamo());
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


		public static function searchTipoReclamo()
		{
			try
			{
				//Sentencia SQL para selección de datos utilizando
				self::getDatabase();
				$query = "SELECT
				id_tipo_reclamo, 
				Tipo_reclamo
				FROM Tipo_reclamo";
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

        public static function searchEstado()
		{
			try
			{
				//Sentencia SQL para selección de datos utilizando
				self::getDatabase();
				$query = "SELECT
				id_estado, 
				detail_estado
				FROM Estado";
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

        public static function Update($date)
		{
			try{
				$query = "UPDATE Reclamos
				SET
				id_tipo_reclamo = :tipo_reclamo,
                id_estado = :estado
				WHERE id_Reclamo = :id_Reclamo";
				$resultado = self::$cnx->prepare($query);
				$resultado->bindParam(":tipo_reclamo",$date->getId_tipo_reclamo());
                $resultado->bindParam(":estado",$date->getId_estado());
				$resultado->bindParam(":id_Reclamo", $date->getId_Reclamo());
				$resultado->execute();
			}catch (Exception $e)
			{
				die($e->getMessage());
			}
		}

		public static function Delete($patente){
			try{
				self::getDatabase();
				$query = " DELETE 
				FROM 
				Reclamos
				WHERE id_Reclamo = :id_reclamo";
				$resultado = self::$cnx->prepare($query);
				$resultado->bindParam(":id_reclamo", $patente->getId_Reclamo());
				$resultado->execute();
				return $resultado->fetch(PDO::FETCH_OBJ);
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}
}
