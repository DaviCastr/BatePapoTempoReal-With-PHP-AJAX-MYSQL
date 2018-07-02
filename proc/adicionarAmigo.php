<?php 
$id_pessoa = $_GET['id_pessoa'];
$id_user = $_GET['id_usuario'];
require_once("../controle/ControlUsuario.php");
$controle = new ControlUsuario();
require_once("../modelo/Amigo.php");
$amigo = new Amigo();
$amigo->setIdUser($id_user);
$amigo->setIdAm($id_pessoa);
if ($controle->adicionarAmigo($amigo)) {
	$amigo->setIdUser($id_pessoa);
	$amigo->setIdAm($id_user);
	if ($controle->adicionarAmigo($amigo)) {
		// área pra remover notificação
	}
}
?>