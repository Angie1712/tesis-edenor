<?php

class Rol{
    private $id_rol;
    private $detail_rol;

    public function getId_rol(){
		return $this->id_rol;
	}

	public function setId_rol($id_rol){
		$this->id_rol = $id_rol;
	}

    public function getdDetail_rol(){
		return $this->detail_rol;
	}

	public function setDetail_rol($detail_rol){
		$this->detail_rol = $detail_rol;
	}
}