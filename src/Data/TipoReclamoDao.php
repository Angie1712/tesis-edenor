<?php
include_once '../../Entity/conection.php';
include '../../Entity/Tipo_Reclamo.php';

class TipoReclamoDao extends Database
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
}