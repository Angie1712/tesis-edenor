<?php

class Modelo{
    
    private $id_modelo;
    private $Modelo;
    private $id_marca;

    public function getId_modelo(){
		return $this->id_modelo;
	}

	public function setId_modelo($id_modelo){
		$this->id_modelo = $id_modelo;
	}
    
    public function getModelo(){
		return $this->Modelo;
	}

	public function setModelo($Modelo){
		$this->Modelo = $Modelo;
	}

    public function getId_marca(){
		return $this->id_marca;
	}

	public function setId_marca($id_marca){
		$this->id_marca = $id_marca;
	}

}