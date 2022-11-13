<?php
require_once '../../Data/VehiculoDao.php';
require_once '../../Entity/Vehiculo.php';

class VehiculoController
{
    public static function searchVehiculo()
    {
        return VehiculoDao::searchVehiculo();
    }
}