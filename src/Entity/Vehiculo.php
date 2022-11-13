<?php

class Vehiculo
{
    private $id_vehiculo;
    private $patente;
    private $modelo;

    public function getId_vehiculo(){
		return $this->id_vehiculo;
	}

	public function setId_vehiculo($id_vehiculo){
		$this->id_vehiculo = $id_vehiculo;
	}

    public function get_Patente(){
		return $this->patente;
	}

	public function setPatente($patente){
		$this->patente = $patente;
	}

    public function getModelo(){
		return $this->Modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}
}