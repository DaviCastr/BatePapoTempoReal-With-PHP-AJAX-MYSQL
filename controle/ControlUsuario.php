<?php
require_once("Conexao.php");
class ControlUsuario{
	public function CadastrarUsuario($usuario){
		$resultado = false;
	 	try{
			$sql = "INSERT INTO usuarios(nome,email,genero,nacionalidade,senha,telefone) VALUES(:nome,:email,:genero,:nacionalidade,:senha,:telefone);";
			$con = new Conexao();
			$cad = $con->getCon()->prepare($sql);
			$cad->bindParam("nome",$usuario->getNome());
			$cad->bindParam("email",$usuario->getEmail());
			$cad->bindParam("genero",$usuario->getGenero());
			$cad->bindParam("nacionalidade",$usuario->getNacionalidade());
			$cad->bindParam("senha",$usuario->getSenha());
			$cad->bindParam("telefone",$usuario->getTelefone());
			
			if ($cad->execute()) {
				$resultado = true;
			}
		}catch(PDOException $ex){
			echo $ex->getMessage();
			$resultado = false;
		}catch(Exception $ex){
			echo $ex->getMessage();
			$resultado = false;
		}

	return $resultado;
	}

	public function SelecionarAmigos($usuario){
		$retorno = null;
		try{	
			$con = new Conexao();
			$id = $usuario->getId();
			$sql = "SELECT usuarios.nome,usuarios.id,amigos.idAm AS idAmg FROM amigos INNER JOIN usuarios ON usuarios.id = amigos.idAm WHERE idUser = '{$id}';";
			$retorno = $con->getCon()->query($sql,PDO::FETCH_OBJ);
			
		}catch(PDOException $p){
			echo $p->getMessage();
			$retorno = null;
		}catch(Exception $e){
			echo $e->getMessage();
			$retorno = null;
		}
	return $retorno;
	}

	public function pesquisarPessoas(){
		$retorno = null;
		try {
			$con = new Conexao();
			$sql = "SELECT id,nome FROM usuarios;";
			$retorno = $con->getCon()->query($sql, PDO::FETCH_OBJ);
		}catch(PDOException $p){
			$console = fopen("console.log", "w");
			$erro = $p->getMessage();
			fwrite($console,$erro);
			$retorno = null;
		}catch (Exception $e) {
			$console = fopen("console.log", "w");
			$erro = $e->getMessage();
			fwrite($console,$erro);
			$retorno = null;
		}
	return $retorno;
	}
	public function psPessoa($nome){
		$retorno = null;
		try {
			$con = new Conexao();
			$pessoa = $nome->getNome();
			$sql = "SELECT id,nome FROM usuarios WHERE nome LIKE '{$pessoa}%';";
			$retorno = $con->getCon()->query($sql, PDO::FETCH_OBJ);
		}catch(PDOException $p){
			$console = fopen("console.log", "w");
			$erro = $p->getMessage();
			fwrite($console,$erro);
			$retorno = null;
		}catch (Exception $e) {
			$console = fopen("console.log", "w");
			$erro = $e->getMessage();
			fwrite($console,$erro);
			$retorno = null;
		}
	return $retorno;
	}

	public function adicionarAmigo($amigo){
		$retorno = false;
		try {
			$con = new Conexao();
			$sql= "INSERT INTO amigos(idUser,idAm) VALUES(:idUser,:idAm);";
			$idUser = $amigo->getIdUser();
			$idPessoa = $amigo->getIdAm();
			$adiciona = $con->getCon()->prepare($sql);
			$adiciona->bindParam("idUser",$idUser);
			$adiciona->bindParam("idAm",$idPessoa);
			if($adiciona->execute()){
				$retorno = true;
			}
		}catch(PDOException $p){
			$arquivo = fopen("console.log","w");
			fwrite($arquivo,$e->getMessage());
		} catch (Exception $e) {
			$arquivo = fopen("console.log","w");
			fwrite($arquivo,$e->getMessage());
		}
	return $retorno;
	}

	public function removerAmigo($amigo){
		$retorno = false;
		try {
			$con = new Conexao();
			$id = $amigo->getIdUser();
			$id2 = $amigo->getIdAm();
			$sql = "DELETE FROM batepapo WHERE idEnv =:idEnv AND idRec =:idRec OR idEnv =:idEnv2 AND idRec =:idRec2;";
			$sql2 = "DELETE FROM amigos WHERE idUser =:idUser AND idAm =:idAm OR idUser =:idUser2 AND idAm =:idAm2;";
			$deletaPapo = $con->getCon()->prepare($sql);
			$deletaAmigo = $con->getCon()->prepare($sql2);
			// batepapo
			$deletaPapo->bindParam("idEnv",$id);
			$deletaPapo->bindParam("idRec",$id2);
			$deletaPapo->bindParam("idEnv2",$id2);
			$deletaPapo->bindParam("idRec2",$id);
			// amigo
			$deletaAmigo->bindParam("idUser",$id);
			$deletaAmigo->bindParam("idAm",$id2);
			$deletaAmigo->bindParam("idUser2",$id2);
			$deletaAmigo->bindParam("idAm2",$id);

			if($deletaPapo->execute() AND $deletaAmigo->execute()){
				$retorno = true;
			}
		} catch (PDOException $p) {
			$arquivo = fopen("console.log","w");
			fwrite($arquivo, $p->getMessage());
		}catch (Exception $e) {
			$arquivo = fopen("console.log","w");
			fwrite($arquivo, $e->getMessage());
		}
	return $retorno;
	}

	public function adicionarNotificacao($notificacao){
	$retorno = false;
		try{
			$con = new Conexao();
			$sql = "INSERT INTO notificacao(titulo,idUser,comando) VALUES(:titulo,:idUser,:comando);";
			$adiciona = $con->getCon()->prepare($sql);
			$adiciona->bindParam("titulo",$titulo);
			$adiciona->bindParam("idUser",$idUser);
			$adiciona->bindParam("comando",$comando);
			if($adiciona->execute()){
				$retorno = true;
			}
		}catch(PDOExeption $p){
			$arquivo = fopen("console.log","w");
			fwrite($arquivo,$p->getMessage());
		}catch(Exeption $e){
			 $arquivo = fopen("console.log","w");
			fwrite($arquivo,$e->getMessage());
		}
	return $retorno;
	}
}
?>