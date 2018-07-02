<?php 
session_start();
if (!isset($_SESSION['email'])) {
	header("Location: ../");
}
require_once("../controle/ControlBatePapo.php");
require_once("../modelo/BatePapo.php");
	date_default_timezone_set('America/Fortaleza');
	$hora=date('h:i A',time());
	$data=date('AAAA-MM-DD ',time());
	$usuario = $_SESSION['id_usuario'];
	$amigo = $_GET['id_amigo'];
	$batepapo = new BatePapo();
	$batepapo->setIdUser($usuario);
	$batepapo->setIdAm($amigo);
	$controle = new ControlBatePapo();
	$email = $_SESSION['email'];
	$mensagens = $controle->SelecionarMensagens($batepapo);
	if ($amigo ==0) {
		echo "<h3 style='color:white;text-align:center'>Clique no amigo</h3>";
	}
?>
	<div class="grid-container">
		<div class="grid-x">
			<div class='cell small-12 medium-12 large-12 float-right'>
				<div id='balaoU' class='cell small-12 medium-9 large-7 float-right'>
					<p class='mensagemU text-right'>
						<img src="../img/preloader.gif"style="display: block;width:90%;margin-right: auto;margin-left: auto;">

					<span class="float-right hora"><?php echo $hora; ?></span>
					</p>
				</div>
			</div>
	
<?php
	foreach ($mensagens as $m) {
		if ($usuario == $m->idEnv) {
		?>
			<div class='cell small-12 medium-12 large-12 float-right'>
				<div id='balaoU' class='cell small-12 medium-9 large-7 float-right'>
					<p class='mensagemU text-right'>
						<?php echo $m->mensagem; ?>
					<span class="float-right hora"><?php echo $hora; ?></span>
					</p>
				</div>
			</div>
		<?php	
		}else{
		?>
			<div class='cell small-12 medium-12 large-12 float-left'>
				<div id='balaoR' class='cell small-12 medium-9 large-7 float-left'>
					<p class='mensagemR text-left'>
						<?php echo $m->mensagem; ?>
					 <span class="float-right hora"><?php echo $hora; ?></span>		
					</p>
				</div>
			</div>
		<?php
		}
	 } 
?>
		</div>
	</div>