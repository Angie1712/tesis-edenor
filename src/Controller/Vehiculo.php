<?php
require_once '../../Data/VehiculoDao.php';
require_once '../../Entity/Vehiculo.php';

class VehiculoController
{
    public static function searchVehiculo()
    {
        return VehiculoDao::searchVehiculo();
    }

    public static function searchModelo()
    {
        return VehiculoDao::searchModelo();
    }

    public static function CreatVehiculo($patente,$modelo)
    {   
        $obj_vehiculo = new Vehiculo();
        $obj_vehiculo-> setPatente($patente);
        $obj_vehiculo-> setId_modelo($modelo);
        

        return VehiculoDao::CreateVehiculo($obj_vehiculo);
    }

    public static function Crud($patente){
        $pvd = new Vehiculo();
        $pvd-> setPatente($patente['Patente']);
        $pvd->setId_Modelo($patente['modelo']);
        
        return VehiculoDao::Update($pvd);
  }

    public static function Listar($patente){
        $pvd = new Vehiculo();
        $pvd->setPatente($patente);

        return VehiculoDao::Listar($pvd);
    }
}