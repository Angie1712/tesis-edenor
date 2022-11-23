<?php
include_once '../../Entity/conection.php';
include '../../Entity/Reclamo.php';

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
            1,
			:id_vehiculo,
            :id_tipo_reclamo,
            1)";
			self::getDatabase();
			$resultado = self::$cnx->prepare($query);
			$resultado->bindParam(":Reclamo", $reclamo->getReclamo());
			//$resultado->bindParam(1, $reclamo->getId_user());
            $resultado->bindParam(":id_vehiculo", $reclamo->getId_vehiculo());
            $resultado->bindParam(":id_tipo_reclamo", $reclamo->getId_tipo_reclamo());
			if ($resultado->execute()){
				return true;
			}
	
			return false;
        }
        public static function SearchReclamo()
        {
            self::getDatabase();
            $query="SELECT 
            Reclamo,
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
            JOIN Tipo_reclamo on Reclamos.id_tipo_reclamo = Tipo_reclamo.id_tipo_reclamo";
            $resultado = self::$cnx->prepare($query);
			//Ejecución de la sentencia SQL.
			$resultado->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $resultado->fetchAll(PDO::FETCH_OBJ);
        }
}
