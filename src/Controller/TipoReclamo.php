<?php

include '../../Data/TipoReclamoDao.php';

class TipoReclamoController{

    public static function searchTipoReclamo()
    {
        return TipoReclamoDao::searchTipoReclamo();
    }
}