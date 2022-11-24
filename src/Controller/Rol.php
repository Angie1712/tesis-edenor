<?php

include '../../Data/RolDao.php';

class RolController{

    public static function searchRol()
    {
        return RolDao::searchRol();
    }

}