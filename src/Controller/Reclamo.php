<?php

include '../../Data/ReclamoDao.php';

class ReclamoController{

    public static function CreatReclamo($vehiculo, $tipo_reclamo,$reclamo){
        $obj_reclamo = new Reclamo();
        $obj_reclamo->setId_vehiculo($vehiculo);
        $obj_reclamo->setId_tipo_reclamo($tipo_reclamo);
        $obj_reclamo->setReclamo($reclamo);
        $obj_reclamo->setId_user(1);
        $obj_reclamo->setId_estado(1);

        return ReclamoDao::CreatReclamo($obj_reclamo);

    }

    public static function searchReclamo()
    {
        return ReclamoDao::SearchReclamo();
    }

}