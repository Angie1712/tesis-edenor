<?php

include '../../Data/ReclamoDao.php';
require_once '../../Entity/Vehiculo.php';
require_once '../../Entity/User.php';


class ReclamoController{

    public static function CreatReclamo($vehiculo, $tipo_reclamo,$reclamo, $id_user){
        $obj_reclamo = new Reclamo();
        $obj_reclamo->setId_vehiculo($vehiculo);
        $obj_reclamo->setId_tipo_reclamo($tipo_reclamo);
        $obj_reclamo->setReclamo($reclamo);
        $obj_reclamo->setId_user($id_user);
        $obj_reclamo->setId_estado(1);

        return ReclamoDao::CreatReclamo($obj_reclamo);

    }

    public static function searchReclamo($id_user)
    {   
        $obj_user = new User();
        $obj_user->setId($id_user);
        
        return ReclamoDao::SearchReclamo($obj_user);
    }
    public static function searchReclamoAdmin()
    {   
        return ReclamoDao::SearchReclamoAdmin();
    }

    public static function Listar($id_Reclamo){
        $pvd = new Reclamo();
        $pvd->setId_Reclamo($id_Reclamo);

        return ReclamoDao::Listar($pvd);
    }

    public static function Crud($id_Reclamo){
        $pvd = new Reclamo();
        $pvd->setId_Reclamo($id_Reclamo['id_Reclamo']);
        $pvd->setId_tipo_reclamo($id_Reclamo['tipo_reclamo']);
        $pvd->setId_estado($id_Reclamo['estado']);
        
        return ReclamoDao::Update($pvd);
  }
}