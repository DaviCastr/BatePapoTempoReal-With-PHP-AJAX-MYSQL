<?php 
/**
 * 
 */
class BatePapo
{
	private $iduser;
	private $idam;
	private $hora;
	private $data;
	private $mensagem;

	public function getIdUser(){
		return $this->iduser;
	}

	public function setIdUser($iduser){
		$this->iduser = $iduser;
	}

	public function getIdAm(){
		return $this->idam;
	}

	public function setIdAm($idam){
		$this->idam = $idam;
	}

	public function getMensagem(){
		return $this->mensagem;
	}

	public function setMensagem($mensagem){
		$this->mensagem = $mensagem;
	}

	public function getHora(){
		return $this->hora;
	}

	public function setHora($hora){
		$this->hora = $hora;
	}

	public function getData(){
		return $this->data;
	}

	public function setData($data){
		$this->data = $data;
	}
}
?>