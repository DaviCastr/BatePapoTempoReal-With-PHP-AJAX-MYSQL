<?php 
	require_once("../controle/ControlUsuario.php");
	$controle = new ControlUsuario();
	$resultados = $controle->pesquisarPessoas();
	if ($resultados !=null) {
		if (isset($_SESSION['id_usuario'])) {
			$id_user = $_SESSION['id_usuario'];
		}else{
			$id_user = $_GET['id_usuario'];
		}
		
	?>
	<div class="grid-x">
		<?php
		foreach ($resultados as $pe) {
		if ($pe->id != $id_user) {
			$sql ="SELECT * FROM amigos WHERE idUser = :idUser AND idAm = :idAm;";	
			$conexao = new Conexao();
			$query = $conexao->getCon()->prepare($sql);
			$query->bindParam("idUser",$id_user);
			$query->bindParam("idAm",$pe->id);
			$query->execute();
			$conf = $query->fetch(PDO::FETCH_ASSOC);
		?>
			<div class="cell small-8">
				<span class="balapP">
					<?php 
						echo "
						<a href='inforpessoa.php?id_pessoa=$pe->id'><img src='../img/icon.png' class='perfil'> $pe->nome </a>
						"; 
					?>
				</span>
			</div>
			<?php	
			if ($conf['idAm'] == $pe->id) {
				echo "
				<div class='cell small-4'>
				<a href='#' onclick=\"removamigo($pe->id,$id_user)\" style='width:100%;background-color:red;' class='button'>Desfazer</a>
				</div>
				";
			}else{
			?>
			<div class="cell small-4">
			<?php 
			echo "
				<a href=\"#\" onclick=\"adicamigo($pe->id,$id_user)\" style=\"width: 100%;background-color:#ffd800;color:#000;\" class='button'>Solicitar</a>
			";
			?>
			</div>
		<?php
			}
		$id = $pe->id;
		}
		}
		if (empty($id)) {
		echo "
			<span class='centro'>
				<cite>Pessoa não encontrada!</cite>
			</span>
		";
		}
		?>
	</div>
	<?php
	}
?>