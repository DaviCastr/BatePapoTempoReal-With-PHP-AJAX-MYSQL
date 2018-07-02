<?php 				
$id_amigoB =$_GET['id_amigo'];
?>
		<form name='formbatepapo' action='#'  method='post'>
				  <div class="grid-x">
					<span id='gravar'></span>  
					<div class="cell small-12 medium-12 large-12">
						<div class="input-group">
							<span class="input-group-label" for='mensagem'><img src="../img/icon.png" width="40" height="40"></span>
							<input type="text"  autocomplete="off" class="input-group-field" name="mensagem" id="mensagem" placeholder="Digite aqui sua mensagem">
							<div class="input-group-button">
							<?php 
							echo "
    							<input type=\"submit\" onclick='gravarMensagem($id_amigoB);' class=\"button\" value=\">\">
    							";
    						?>
  							</div>
						</div>
					</div>    
				  </div>
				</form>