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
}