<?php

class User{
    private $id;
    private $name;
    private $surname;
    private $email;
    private $id_rol;
    private $id_condition;
    private $legajo;
    private $dni;

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getSurname(){
		return $this->surname;
	}

	public function setSurname($surname){
		$this->surname = $surname;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

    public function getId_rol(){
		return $this->id_rol;
	}

	public function setId_rol($id_rol){
		$this->id_rol = $id_rol;
	}

	public function getId_condicion(){
		return $this->id_condition;
	}

	public function setId_condicion($id_condicion){
		$this->id_condicion = $id_condicion;
	}

    public function getLegajo(){
		return $this->legajo;
	}

	public function setLegajo($legajo){
		$this->legajo = $legajo;
	}

    public function getDni(){
		return $this->dni;
	}

	public function setDni($dni){
		$this->dni = $dni;
	}
}

?>