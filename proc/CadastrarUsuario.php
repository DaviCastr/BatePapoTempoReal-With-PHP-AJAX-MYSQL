<?php 
foreach ( $_POST as $chave => $valor ) {
 // Remove todas as tags HTML
 // Remove os espaços em branco do valor
$$chave = trim( strip_tags( $valor ) );
}
if (isset($_POST['email'])) {
	require_once("../modelo/Usuario.php");
	require_once("../controle/ControlUsuario.php");
	$Usuario = new Usuario();
	$Usuario->setNome($_POST['nome']);
	$Usuario->setEmail($_POST['email']);
	$Usuario->setGenero($_POST['genero']);
	$Usuario->setNacionalidade($_POST['nacionalidade']);
	$Usuario->setSenha($_POST['senha']);
	$Usuario->setTelefone($_POST['telefone']);
	$Controle = new ControlUsuario();
	if ($Controle->CadastrarUsuario($Usuario)) {
		header("Location: ../visual/login.php");
	}else{
		header("Location: ../visual/cadastro.php?ret='t'");
	}
}
?>