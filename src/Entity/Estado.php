<?php

class Estado{
    private $id_estado;
    private $detail_estado;

    public function getId_estado(){
		return $this->id_estado;
	}

	public function setId_estado($id_estado){
		$this->id_estado = $id_estado;
	}

    public function getDetail_estado(){
		return $this->detail_estado;
	}

	public function setDetail_estado($detail_estado){
		$this->detail_estado= $detail_estado;
	}
}