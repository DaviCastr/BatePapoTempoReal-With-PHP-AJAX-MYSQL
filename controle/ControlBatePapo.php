<?php 
/**
 * 
 */
require_once("Conexao.php");
class ControlBatePapo
{
	public function InserirMensagem($batepapo){

	$retorno = false;
	    try {
		    $con = new Conexao();
			$sql = "INSERT INTO batepapo(idEnv,idRec,mensagem,hora,data) VALUES(:idEnv,:idRec,:mensagem,:hora,:data);";
			$idEnv=$batepapo->getIdUser();
			$idRec=$batepapo->getIdAm();
			$mensagem =$batepapo->getMensagem();
			$hora=$batepapo->getHora();
			$data=$batepapo->getData();
			$gravar = $con->getCon()->prepare($sql);
			$gravar->bindParam("idEnv",$idEnv);
			$gravar->bindParam("idRec",$idRec);
			$gravar->bindParam("mensagem",$mensagem);
			$gravar->bindParam("hora",$hora);
			$gravar->bindParam("data",$data);
			$gravar->execute();
			$retorno = true;
		} catch (PDOException $e) {
	    	echo $e->getMessage();
	    	$retorno = false;
	    } catch (Exception $er) {
	    	echo $er->getMessage();
	    	$retorno = false;
	    }
	return $retorno;
	}

	public function SelecionarMensagens($batepapo){
		$retorno = null;
		try {
			$con = new Conexao();
			$idUser = $batepapo->getIdUser();
			$idAm = $batepapo->getIdAm(); 
			$sql ="SELECT mensagem,idEnv,idRec,id FROM batepapo WHERE idEnv = '{$idUser}' AND idRec = '{$idAm}' OR idEnv = '{$idAm}' AND idRec = '{$idUser}' ORDER BY id DESC;"; 
			$retorno = $con->getCon()->query($sql, PDO::FETCH_OBJ);
			// $prepara->bindParam(1,$batepapo->getIdUser());
			// $prepara->bindParam(2,$batepapo->getIdAm());
			// $prepara->bindParam(3,$batepapo->getIdAm());
			// $prepara->bindParam(4,$batepapo->getIdUser());
			// $prepara->execute();
			// $retorno = $prepara->fetch();
			
		}catch(PDOException $p){
			echo $p->getMessage();
			$retorno = null;
		} catch (Exception $e) {
			echo $e->getMessage();
			$retorno = null;
		}
	return $retorno;
	}
}
?>