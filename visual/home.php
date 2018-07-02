<?php 
session_start();
if(!isset($_SESSION['email'])){
	header("Location: login.php");
}
$links ="
<link rel='stylesheet' type='text/css' href='../css/appmenufooter.css'>
<link rel='stylesheet' type='text/css' href='../css/batepapo.css'>
<link rel='stylesheet' type='text/css' href='../css/apphome.css'>
";
require_once("../codigos/head.php");
$home ="ativo";$batepapo ="";$pessoas ="";
require_once("../codigos/menu.php");
?>
<br />
<div style="padding-left: 2%;padding-right: 2%;">
	<div class="grid-x">
		<div class="cell small-12 medium-4 large-3 float-center" id="divlogo">
			<!-- <img src="../img/logo.jpg" id="imglogopc"> -->
		</div>
		<div class="cell small-12 medium-4 large-6 float-center" id="divlogo">
			<h3 style="text-align: center;color: white;">Local de publicações</h3>
		</div>
		<div class="cell small-12 medium-4 large-3 float-right">
      		<!-- <div id="amigos"></div> -->
    	</div>
	</div>
</div>
<?php
$scripts="
<script type='text/javascript' src='../js/ajax.js'></script>
<script type='text/javascript' src='../js/apphome.js'></script>
";
require_once("../codigos/footer.php");
require_once("../codigos/script.php");
 ?>

