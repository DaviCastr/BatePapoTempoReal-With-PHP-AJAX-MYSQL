<?php 
require_once("../controle/ControlUsuario.php");
require_once("../modelo/Amigo.php");
$idUser = $_GET['id_usuario'];
$idAm = $_GET['id_pessoa'];
$amigo = new Amigo();
$amigo->setIdUser($idUser);
$amigo->setIdAm($idAm);
$controle = new ControlUsuario();
if ($controle->removerAmigo($amigo)) {
	// noftificação
}
?>