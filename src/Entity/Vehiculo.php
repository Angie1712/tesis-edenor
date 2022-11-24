<?php

class Vehiculo
{
    private $id_vehiculo;
    private $patente;
    private $id_Modelo;

    public function getId_vehiculo(){
		return $this->id_vehiculo;
	}

	public function setId_vehiculo($id_vehiculo){
		$this->id_vehiculo = $id_vehiculo;
	}

    public function getPatente(){
		return $this->patente;
	}

	public function setPatente($patente){
		$this->patente = $patente;
	}

    public function getId_Modelo(){
		return $this->id_Modelo;
	}

	public function setId_Modelo($id_Modelo){
		$this->id_Modelo = $id_Modelo;
	}
}