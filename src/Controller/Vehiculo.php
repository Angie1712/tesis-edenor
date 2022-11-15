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
}