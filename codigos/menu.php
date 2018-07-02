<nav>
<div class="title-bar" id="menu2"  data-responsive-toggle="mainNavigation" data-hide-for="large">
  <div class="title-bar-left">
    <button class="menu-icon" type="button" data-toggle="mainNavigation"></button>
    <div class="title-bar-title">Menu</div>
  </div>
  <div class="title-bar-left">
    <a href="#" id="nlogo2">A P P  T A L K</a>
  </div>
</div>

<div class="top-bar" id="mainNavigation">
  <div class="top-bar-center">
    <ul class="menu vertical medium-horizontal">
      <div class="hide-for-small-only hide-for-medium-only" id="divNlogo">
        <a id="Nlogo" href="#uu" >A P P T A L K</a>
      </div>
      <?php 
            if(isset($_SESSION['email'])){
                echo "
                    <li><a href='home.php' class='$home'>Home</a></li>
                    <li><a href='batepapo.php?id_amigo=0' class='$batepapo'>Bate Papo</a></li>
                    <li><a class='$pessoas' href='pessoas.php'>Pessoas
                    </a></li>
                    <li><a href='notificacoes.php'>Notificações</a></li>
                    <li><a href='perfil.php'>Perfil</a></li>
                    <li><a href='../proc/sair.php'>Sair</a></li>
                ";
            }else{
                echo "
                 
                ";
            }
        ?>
    </ul>
    <!--  <ul id="autoCloseExample" class="f-dropdown" data-dropdown-content tabindex="-1" aria-hidden="true" aria-autoclose="false" tabindex="-1">
    <li><a href="#">This is a link</a></li>
    <li><a href="#">This is another</a></li>
    <li><a href="#">Yet another</a></li>
  </ul> -->
  </div>
  <!-- <div class="top-bar-right">
    <ul class="menu vertical medium-horizontal">
      
    </ul>
  </div> -->

</div>
</nav>