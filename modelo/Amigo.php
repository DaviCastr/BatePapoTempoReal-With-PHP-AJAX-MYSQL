<?php 
/**
 * 
 */
class Amigo
{
	
	private $iduser;
	private $idam;
	private $idenv;
	private $idrec;

	public function getIdUser(){
		return $this->iduser;
	}

	public function setIdUser($idUser){
		$this->iduser = $idUser;
	}

	public function getIdAm(){
		return $this->idam;
	}

	public function setIdAm($idAm){
		$this->idam = $idAm;
	}

	public function getIdEnv(){
		return $this->idenv;
	}

	public function setIdEnv($idEnv){
		$this->idenv = $idEnv;
	}

	public function getIdRec(){
		return $this->idrec;
	}

	public function setIdRec($idRec){
		$this->idrec = $idRec;
	}
}
?>