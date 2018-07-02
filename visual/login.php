<?php 
session_start();
if (isset($_SESSION['email'])) {
  header("Location: ../index.php");
}
$links ="
<link rel='stylesheet' type='text/css' href='../css/sweetalert2.min.css'>
<link rel='stylesheet' type='text/css' href='../css/appmenufooter.css'>
<link rel='stylesheet' type='text/css' href='../css/applogin.css'>
";
require_once("../codigos/head.php");

?>
<br />
  <div class="grid-x grid-container">
     <div class="cell small-12 medium-6 large-6 float-center" id="divlogo">
        <img src="../img/logo.jpg" class="float-center" style="border-radius:50%;width: 180px;margin-top: 2%;">
     </div>
     <div class="cell small-12 medium-7 large-7 float-center" id="divlogo">
        <h3 style="color: white;text-align: center;">A P P  T A L K</h3>
     </div>
  </div>
  <div class="grid-x grid-container">
      <div class="cell small-12 medium-6 large-5 float-center"> 
        <div id="login">
          <h3 class='black-text'>Login</h3>
          <form action='../proc/loga.php'  method='post'>
            <!-- email -->
            <div class="cell small-12">
              <label for='email'>Email
                  <input type='email' id='email' placeholder="Digite seu E-mail" required name='email' />
              </label> 
            </div>
            <span id='resposta'></span>
            <!-- senha -->
            <div class="cell small-12">
              <label for='senha'>Senha
                <input type='password' placeholder="Digite sua Senha" required id='senha' name='senha'>
              </label>
            </div>
            <!-- Botão enviar -->
            <div class="cell small-6 button-group" >
              <input type="submit" class="button" id='btnENviar' name="Enviar" value="Enviar">
            </div>
            <div class="cell small-6" >
              <p>Não tem conta? <a href='cadastro.php'> cadastre-se</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
<?php 
$scripts = "
<script type='text/javascript' src='../js/sweetalert2.min.js'></script>
<script type='text/javascript' src='../js/appmenu.js'></script>
<script type='text/javascript' src='../js/applogin.js'></script>
";
require_once("../codigos/script.php");
?>

