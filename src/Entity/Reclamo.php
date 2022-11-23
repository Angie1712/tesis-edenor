<?php

class Reclamo{
    private $id_Reclamo;
    private $Reclamo;
    private $id_user;
    private $id_vehiculo;
    private $id_tipo_reclamo;
	private $id_estado;

    public function getId_Reclamo(){
		return $this->id_Reclamo;
	}

	public function setId_Reclamo($id_Reclamo){
		$this->id_Reclamo = $id_Reclamo;
	}

    public function getReclamo(){
		return $this->Reclamo;
	}

	public function setReclamo($Reclamo){
		$this->Reclamo = $Reclamo;
	}

    public function getId_user(){
		return $this->id_user;
	}

	public function setId_user($id_user){
		$this->id_user = $id_user;
	}

    public function getId_vehiculo(){
		return $this->id_vehiculo;
	}

	public function setId_vehiculo($id_vehiculo){
		$this->id_vehiculo = $id_vehiculo;
	}
    public function getId_tipo_reclamo(){
		return $this->id_tipo_reclamo;
	}

	public function setId_tipo_reclamo($id_tipo_reclamo){
		$this->id_tipo_reclamo = $id_tipo_reclamo;
	}

	public function getId_estado(){
		return $this->id_estado;
	}

	public function setId_estado($id_estado){
		$this->id_estado = $id_estado;
	}
}