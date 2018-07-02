$(document).foundation();
var formu = document.getElementById("envio");
var nome = document.getElementById("nome");
var email = document.getElementById("email");
var rs = document.getElementById("resposta");
var btn = document.getElementById('enviar');
	email.onchange = function(){
		requisitarArquivo("../proc/vEmail.php?email="+email.value,rs);
		var respostafinal = document.getElementById('rs');
	};

	formu.onsubmit = function(){
		sen = document.getElementById('sen');
		csen = document.getElementById('csen');
		respostafinal = document.getElementById("rs");
	if (respostafinal || email.value == "") {
		swal("Erro","coloque um email valido","error");
		email.focus();
		return false;
	}else if(sen.value.length <8 || csen.value.length <8){
		swal("erro",'Senha menor que 8 dígitos',"error");
		sen.focus();
		return false;
	}else if(sen.value != csen.value){
		swal("Erro",'Senhas Diferentes, Tente novamente',"error");
		sen.focus();
		return false;
	}else{
		var pre = document.getElementById("pre");
		pre.innerHTML ="<img src ='img/preloader.gif' style='width:50px;height:50px;margin-left:45%'>";
		swal("Sucessos","Cadastrado :>","success");
		return true;
	}
};

// select do materialize
// email.onkeydown = function(){

// 	btn.style.display = "none";

// };