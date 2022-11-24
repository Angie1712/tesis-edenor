<?php

include '../../Data/UserDao.php';

class UserController{

    public static function loginUser($dni,$legajo)
    {
        $obj_user = new User();
        $obj_user ->setLegajo($legajo);
        $obj_user ->setDni($dni);

        return UserDao::loginUser($obj_user);
    }
    public static function getUser($legajo)
    {
        
        $obj_user = new User();
        $obj_user ->setLegajo($legajo);
       
        return UserDao::getUser($obj_user);
    } 

    public static function searchUser()
    {
        return UserDao::searchUser();
    }

    public static function CreatUser($name,$surname,$email,$dni,$legajo,$rol){
        $obj_reclamo = new User();
        $obj_reclamo->setName($name);
        $obj_reclamo->setSurname($surname);
        $obj_reclamo->setEmail($email);
        $obj_reclamo->setDni($dni);
        $obj_reclamo->setLegajo($legajo);
        $obj_reclamo->setId_rol($rol);

        return UserDao::CreatUser($obj_reclamo);

    }

    public static function Listar($user){
        $pvd = new User();
        $pvd->setId($user);

        return UserDao::Listar($pvd);
    }

    public static function Crud($usuario){
        
        $pvd = new User();
        $pvd-> setId($usuario['id_user']);
        $pvd->setName($usuario['name']);
        $pvd->setSurname($usuario['surname']);
        $pvd->setEmail($usuario['email']);
        $pvd->setId_rol($usuario['id_rol']);
        return UserDao::Update($pvd);
  }
}