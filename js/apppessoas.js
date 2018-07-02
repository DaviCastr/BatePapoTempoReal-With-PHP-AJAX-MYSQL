$(document).foundation();
var formu = document.forms.pesqpes;
var campo = formu.campopessoa;
var cont = document.getElementById("quadroPessoas");
function atualizar(id_user) {
	if (campo.value == "") {
	requisitarArquivo("../codigos/pessoas.php?id_usuario="+id_user,cont);
	}
}
formu.onsubmit = function(e){
	e.preventDefault();
	if (campo.value != "") {
	requisitarArquivo("../proc/pesquisapessoas.php?nome_pessoa="+campo.value,cont);
	}
}
function adicamigo(idpessoa,iduser){
	var contp = document.getElementById("quadroPessoas");
	var campoadic = document.getElementById('campoadic');
	requisitarArquivo("../proc/adicionarAmigo.php?id_pessoa="+idpessoa+"&id_usuario="+iduser,campoadic);
	if (campo.value != "") {
		var interval = setInterval(function () {
      	requisitarArquivo("../proc/pesquisapessoas.php?nome_pessoa="+campo.value +"&id_usuario="+iduser ,contp);
        	    clearInterval(interval);
    	}, 500/* 1s */);
	}else{
		var interval = setInterval(function () {
      	requisitarArquivo("../codigos/pessoas.php?id_usuario="+iduser,contp);
        	    clearInterval(interval);
    	}, 500/* 1s */);
	}
}
function removamigo(idpessoa,iduser){
	var contp = document.getElementById("quadroPessoas");
	var campoadic = document.getElementById('campoadic');
	requisitarArquivo("../proc/removerAmigo.php?id_pessoa="+idpessoa+"&id_usuario="+iduser,campoadic);
	if (campo.value !="") {
		var interval = setInterval(function () {
	      requisitarArquivo("../proc/pesquisapessoas.php?nome_pessoa="+campo.value+"&id_usuario="+iduser ,contp);
	            clearInterval(interval);
	    }, 500/* 1s */);
	}else{
		var interval = setInterval(function () {
      	requisitarArquivo("../codigos/pessoas.php?id_usuario="+iduser,contp);
        	    clearInterval(interval);
    	}, 500/* 1s */);
	}
}
