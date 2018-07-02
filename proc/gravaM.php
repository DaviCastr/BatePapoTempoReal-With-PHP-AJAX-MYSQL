<?php 
session_start();
foreach ( $_GET	 as $chave => $valor ) {
 // Remove todas as tags HTML
 // Remove os espaços em branco do valor
$$chave = trim( strip_tags( $valor ) );
}
$nova = trim( strip_tags($_GET['mensagem']));
if(isset($nova) AND $nova =="apgmens"){
	require_once("Conexao.php");
	$con = new Conexao();
	$apagar = $con->getCon()->exec("DELETE FROM batepapo;");
}else if (isset($nova) AND strlen($nova) >0 AND isset($_SESSION['email'])) {
	
	require_once("../modelo/BatePapo.php");
	require_once("../controle/ControlBatePapo.php");
	$batepapo = new BatePapo();
	$hora=date('h:i A',time());
	$data=date('AAAA-MM-DD ',time());
	$batepapo->setIdUser($_SESSION['id_usuario']);
	$batepapo->setIdAm($_GET['id_amigo']);
	$batepapo->setMensagem($nova);
	$batepapo->setHora($hora);
	$batepapo->setData($data);
	$controle = new ControlBatePapo();
	if($controle->InserirMensagem($batepapo)){
		
	}
}
?>