<?php 
session_start();
foreach ( $_POST as $chave => $valor ) {
 // Remove todas as tags HTML
 // Remove os espaços em branco do valor
$$chave = trim( strip_tags( $valor ) );
}
if (isset($_POST['email'])) {
	require_once("Conexao.php");
	$con = new Conexao();
	$sql = "SELECT email,senha,nome,id FROM usuarios WHERE email = :email;";
	$verif = $con->getCon()->prepare($sql);
	$verif->bindParam("email",$_POST['email']);
	$verif->execute();
	$vfinal = $verif->fetch(PDO::FETCH_OBJ);
	$sen = $_POST['senha'];
	$email = $_POST['email'];
	if ($verif->rowCount()>0) {
			if ($vfinal->senha == $sen) {
				$_SESSION['id_usuario'] =$vfinal->id;
				$_SESSION['email'] = $email;
				$_SESSION['nome'] = $vfinal->nome;
				header("Location: ../index.php");
			}else{
				header("location: ../visual/login.php?resp='false1'");
			}
	}else{
		header("location: ../visual/login.php?resp='false2'");
	}
}else{
	header("location: ../index.php");
}
?>