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

    public static function searchUser()
		{
			try
			{
				//Sentencia SQL para selección de datos utilizando
				self::getDatabase();
				$query = "SELECT
				id_user, 
				Name,
                Surname,
                email,
                Rol.detail_rol,
                Legajo,
                dni
				FROM Users
                JOIN Rol on Users.id_rol = Rol.id_rol";
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

        public static function CreatUser($usuario){
            self::getDatabase();
			$query = "INSERT INTO Users
			(Name,
			Surname,
            email,
            id_rol,
            Legajo,
            dni) 
			VALUES
			(:name,
            :surname,
			:email,
            :id_rol,
            :legajo,
            :dni)";
			self::getDatabase();
			$resultado = self::$cnx->prepare($query);
			$resultado->bindParam(":name", $usuario->getName());
            $resultado->bindParam(":surname", $usuario->getSurname());
            $resultado->bindParam(":email", $usuario->getEmail());
            $resultado->bindParam(":id_rol", $usuario->getId_rol());
            $resultado->bindParam(":legajo", $usuario->getLegajo());
            $resultado->bindParam(":dni", $usuario->getDni());
			if ($resultado->execute()){
				return true;
			}
	
			return false;
        }

        public static function Listar($user){
			try
		{
			//Sentencia SQL para selección de datos utilizando
			self::getDatabase();
			$query = "SELECT
			id_user, 
            Name,
            Surname,
            email,
            Rol.detail_rol,
            Legajo,
            dni
			FROM `Users`
            JOIN Rol on Users.id_rol = Rol.id_rol
			WHERE id_user = :id_user";
			$resultado = self::$cnx->prepare($query);
			$resultado->bindParam(":id_user", $user->getId());
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
				$query = "UPDATE Users
				SET
				Name = :name,
                Surname = :surname,
                email = :email,
                id_rol = :id_rol
				WHERE id_user = :id_user";
				$resultado = self::$cnx->prepare($query);
				$resultado->bindParam(":name",$date->getName());
                $resultado->bindParam(":surname",$date->getSurname());
                $resultado->bindParam(":email",$date->getEmail());
				$resultado->bindParam(":id_rol", $date->getId_rol());
                $resultado->bindParam(":id_user",$date->getId());
				$resultado->execute();
			}catch (Exception $e)
			{
				die($e->getMessage());
			}
		}

        public static function Delete($user){
			try{
				self::getDatabase();
				$query = " DELETE 
				FROM 
				Users
				WHERE id_user = :id_user";
				$resultado = self::$cnx->prepare($query);
				$resultado->bindParam(":id_user", $user->getId());
				$resultado->execute();
				return $resultado->fetch(PDO::FETCH_OBJ);
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}
}