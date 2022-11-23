<?php

class Tipo_reclamo
{
    private $id_tipo_reclamo;
    private $Tipo_reclamo;

    public function getId_tipo_reclamo(){
		return $this->id_tipo_reclamo;
	}

	public function setId_vehiculo($id_tipo_reclamo){
		$this->id_tipo_reclamo = $id_tipo_reclamo;
	}

    public function getTipo_reclamo(){
		return $this->Tipo_reclamo;
	}

	public function setTipo_Reclamo($Tipo_reclamo){
		$this->Tipo_reclamo = $Tipo_reclamo;
	}
}