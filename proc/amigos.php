<?php 
session_start();
if (!isset($_SESSION['id_usuario'])) {
	header("Location: ../");
}
require_once("../controle/ControlUsuario.php");
require_once("../modelo/Usuario.php");
$id_usuario = $_SESSION['id_usuario'];
$usuario = new Usuario();
$usuario->setId($id_usuario);
$controle = new ControlUsuario();
$amigos = $controle->SelecionarAmigos($usuario);
if ($amigos == null) {
	header("Location: ../");
}
?>
<div class="callout panel" id="AmigosPanel" data-equalizer-watch="foo">
		<h3 class='text-center textoamigo'>Amigos</h3>
	<div class="grid-x" id="quadroVAmigo">
	
<?php
foreach ($amigos as $am) {
?>
<div class="cell small-12">
	<span class="balaoAm">
		<?php 
		echo "
		<a class='Linkamg' onclick='atualizarBate($am->idAmg)'>
			<img src='../img/icon.png' class='imgamigo'>
			$am->nome
		</a>
		";
		?>
	</span>
</div>
<?php
}
?>	
	
	</div>
</div>