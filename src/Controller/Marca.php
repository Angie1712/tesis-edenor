<?php

include '../../Data/MarcaDao.php';

class MarcaController{

    public static function searchMarca()
    {
        return MarcaDao::searchMarca();
    }

    public static function Listar($marca){
        $pvd = new Marca();
        $pvd->setId_marca($marca);

        return MarcaDao::Listar($pvd);
    }

    public static function Crud($marca){
        
        $pvd = new Marca();
        $pvd-> setId_marca($marca['id_marca']);
        $pvd->setMarca($marca['marca']);
        return MarcaDao::Update($pvd);
  }
  public static function CreatMarca($marca){
    $obj_marca = new Marca();
    $obj_marca->setMarca($marca);
    return MarcaDao::CreatMarca($obj_marca);

}
}