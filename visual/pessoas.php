<?php 
session_start();
if(!isset($_SESSION['email'])){
	header("Location: login.php");
}
$links ="
<link rel='stylesheet' type='text/css' href='../css/appmenufooter.css'>
<link rel='stylesheet' type='text/css' href='../css/batepapo.css'>
<link rel='stylesheet' type='text/css' href='../css/apppessoas.css'>
";
require_once("../codigos/head.php");
$home ="";$batepapo ="";$pessoas ="ativo";
require_once("../codigos/menu.php");
$id_usuario = $_SESSION["id_usuario"];
?>
<div class="grid-container">
	<div class="grid-x" style="margin-top: 4%;margin-bottom: 10%;">
		<div class="cell small-12 medium-8 large-5 float-center">
			<h3 style="color:white;margin-bottom: 5%;" class="text-center">Pesquise por Pessoas</h3>
			<fieldset style="display:block;width:100%;margin-top: auto;background-color: black; border-radius: 2%; border-style: solid;margin-bottom: auto;">
				<form action="#" method="post" name="pesqpes">
					<div class="grid-x">
						<div class="cell small-12 medium-8 large-12 float-center">
							<div class="input-group">
								<span class="input-group-label" for='pessoas'>M</span>
							<?php
							 echo"
								<input onkeyup=\"atualizar($id_usuario)\" type=\"text\" name=\"campopessoa\" autocomplete=\"off\" class=\"input-group-field\" required id=\"pessoas\" required placeholder=\"Pesquisar pessoas\">
							 "; 	
							?>
								<div class="input-group-button">
	    							<input type="submit" class="button" value=">">
	  							</div>
							</div>
						</div>
					</div>
				</form>
				<div id="quadroPessoas" style="overflow: auto;height: 200px;">
					<?php require_once("../codigos/pessoas.php"); ?> 
				</div>
				<div id="campoadic"></div>
			</fieldset>
		</div>
	</div>
</div>
<?php 
$scripts="
<script type='text/javascript' src='../js/ajax.js'></script>
<script type='text/javascript' src='../js/apppessoas.js'></script>
";
require_once("../codigos/footer.php");
require_once("../codigos/script.php");
?>