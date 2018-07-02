<?php 
session_start();
if(!isset($_SESSION['email'])){
	header("Location: login.php");
}
$links ="
<link rel='stylesheet' type='text/css' href='../css/appmenufooter.css'>
<link rel='stylesheet' type='text/css' href='../css/batepapo.css'>
<link rel='stylesheet' type='text/css' href='../css/appbatepapo.css'>
";
require_once("../codigos/head.php");
$home ="";$batepapo ="ativo";$pessoas ="";
require_once("../codigos/menu.php");
?>
<div class='grid-container '>
	<div class="grid-x" style="margin-top: 3%;">
		 <div class="cell small-12 medium-5 large-3 float-right">
      		<div id="amigos"></div>
    	</div>
    	<div class="cell small-12 medium-6 large-4 float-center">
			<?php 
				if (isset($_GET['id_amigo'])) {
					require_once("../codigos/batepapo.php"); 
				}
			?>
		</div>
	</div>
</div>
<?php
$id = $_GET['id_amigo'];
$scripts="
<script type='text/javascript' src='../js/ajax.js'></script>
<script type='text/javascript' src='../js/batepapo.js'></script>
";

require_once("../codigos/footer.php");
require_once("../codigos/script.php");
?>