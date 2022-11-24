<?php

include '../../Data/ModeloDao.php';

class ModeloController{

    public static function searchModelo()
    {
        return ModeloDao::searchModelo();
    }

    public static function Listar($modelo){
        $pvd = new Modelo();
        $pvd->setId_modelo($modelo);

        return ModeloDao::Listar($pvd);
    }

    public static function Crud($modelo){
        $pvd = new Modelo();
        $pvd->setId_modelo($modelo['id_modelo']);
        $pvd->setModelo($modelo['modelo']);
        $pvd-> setId_marca($modelo['id_marca']);
        return ModeloDao::Update($pvd);
  }
  public static function CreatModelo($modelo ,$marca){
    $obj_modelo = new Modelo();
    $obj_modelo->setModelo($modelo);
    $obj_modelo->setId_marca($marca);
    return ModeloDao::CreatModelo($obj_modelo);

}
}