<?php 
$email = $_GET['email'];
foreach ( $_GET as $chave => $valor ) {
 // Remove todas as tags HTML
 // Remove os espaços em branco do valor
$$chave = trim( strip_tags( $valor ) );
}
if (strlen($email) >10 AND strstr($email,"@")) {
	require_once("Conexao.php");
	$con = new Conexao();
	$sql = "SELECT email FROM usuarios WHERE email=:email;";
	$v = $con->getCon()->prepare($sql);
	$v->bindParam("email",$email);
	$v->execute();
	if ($v->rowCount() >0) {
		echo "<p id='rs' style='color:red;'>Email Indísponivel</p>";
	}else{
		echo "<p  style='color:green;'>Email disponível</p>";
	}
}else if (!strstr($email,"@") AND strlen($email) >10) {
	echo "<p id='rs' style=\"color:red;\">Inclua o @email.com</p>";
}
	


 ?>