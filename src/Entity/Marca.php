<?php

class Marca{
    private $id_marca;
    private $Marca;

    public function getId_marca(){
		return $this->id_marca;
	}

	public function setId_marca($id_marca){
		$this->id_marca = $id_marca;
	}

    public function getMarca(){
		return $this->Marca;
	}

	public function setMarca($Marca){
		$this->Marca = $Marca;
	}
}