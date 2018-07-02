<?php 
session_start();
if (isset($_SESSION['email'])) {
  header("Location: ../index.php");
}
$links="
<link rel='stylesheet' type='text/css' href='../css/sweetalert2.min.css'>
<link rel='stylesheet' type='text/css' href='../css/appmenufooter.css'>
<link rel='stylesheet' type='text/css' href='../css/appcadastro.css'>
";
require_once("../codigos/head.php");
?>
<div class="grid-container">
  <div class="grid-x">
    <div class="cell small-12 medium-6 large-6 float-center" id="divlogo">
      <img src="../img/logo.jpg" class="float-center" style="border-radius:50%;width: 180px;margin-top: 2%;">
    </div>
    <div class="cell small-12 medium-7 large-7 float-center" id="divlogo">
        <h3 style="color: white;text-align: center;">A P P  T A L K</h3>
     </div>
  </div>
  <div class="grid-x">
    <div class="cell small-12 medium-6 large-6 float-center">
        <div id="cadastro" class='floajt-center'>  
          <h3 class="float-center black-text">Cadastro</h3>
          <form id='envio' action='../proc/CadastrarUsuario.php'  method='post'>
            <div class="grid-x grid-padding-x">
              <div class="large-6 medium-6 cell">
                <!--nome-->
                <label for='nome'>Nome
                  <input  type='text' placeholder="Dígite seu nome" id='nome' name='nome' /> 
                </label>
              </div>
              <div class="cell small-12 medium-6 large-6">
                <!--nacionalidade-->
                <label>Nacionalidade
                  <select id="selecao" name="nacionalidade">
                    <option disabled selected>Selecione...</option>
                    <option value="br">Brasil</option>
                    <option value="en">Inglaterra</option>
                    <option value="usa">Estados Unidos</option>
                    <option value="al">Alemanha</option>
                  </select>
                </label>  
              </div>
              <div class="cell small-12 medium-6 large-6">
                <!--Telefone-->
                <label for='telefone'>Telefone
                  <input type="tel" name="telefone" id="telefone">
                </label>
              </div>
              <div class="cell small-12 medium-6 large-6">
                <!--genero-->
                  <label for='genero'>Genero
                    <select name="genero" id="genero">
                      <option value="" disabled selected>Selecione...</option>
                      <option value="m">Masculino</option>
                      <option value="f">Feminino</option>
                    </select>
                  </label>  
              </div>
              <div class="cell small-12 medium-12 large-12">
                <!--email-->
                <label for='email'>Email
                  <input type='email' placeholder="Dígite seu Email" id='email' autocomplete="off" name='email' />
                </label>
              </div>
              <div class='cell small-12'>
                <div id='resposta'></div>
              </div>  
              <div class='cell small-12 medium-6 large-6'>
                <!--senha-->
                <label for="sen">Senha
                  <input type='password' placeholder="Dígite sua Senha" id='sen' name='senha'>
                </label>
              </div> 
              <div class="cell small-12 medium-6 large-6">
                <!--confsenha-->
                <label for='csen'>Confirmar Senha
                  <input type='password' placeholder="Repita sua Senha" id="csen" name='csenha'> 
                </label>
              </div> 
              <div class="cell small-12">
                <!--enviar-->
                <input type='submit' id='btnENviar' class='button' value='Enviar'>
              </div>  
              <div class="cell small-12">
                <p>Já tem conta? <a href='login.php'>Login</a></p>
              </div>
            </div> 
          </form>
        </div>
      </div>
    </div>
</div>
<?php
$scripts = "
<script type='text/javascript' src='../js/sweetalert2.min.js'></script>
<script type='text/javascript' src='../js/ajax.js'></script>
<script type='text/javascript' src='../js/appcadastro.js'></script>
";
require_once("../codigos/script.php");
?>
