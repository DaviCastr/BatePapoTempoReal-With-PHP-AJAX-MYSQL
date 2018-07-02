$(document).foundation();
var localform = document.getElementById("formb");
var batepapo = document.getElementById('batepapo');
var amig = document.getElementById('amigos');
requisitarArquivo('../proc/amigos.php',amig);
// setInterval(function () {
//      requisitarArquivo('../proc/batepapo.php?id_amigo=$id',batepapo);
// }, 1000);
setInterval(function () {
     requisitarArquivo('../proc/amigos.php',amig);
}, 10000);
function gravarMensagem(id_amigos) {
	var formu = document.forms.formbatepapo;
	formu.onsubmit = function(e){
		e.preventDefault();
	}
	var gravar = document.getElementById('gravar');
	var mensagem = formu.mensagem;
if (mensagem.value.length >0) {
	// e.preventDefault();
	requisitarArquivo("../proc/gravaM.php?mensagem="+mensagem.value+"&id_amigo="+id_amigos,gravar);	
	mensagem.value="";	
}
};
function atualizarBate(id_amigo){
requisitarArquivo("../codigos/formbatepapo.php?id_amigo="+id_amigo,localform);
carregando(batepapo);
requisitarArquivo('../proc/batepapo.php?id_amigo='+id_amigo,batepapo);
  setTimeout(function(){
	intervalo =setInterval(function () {
     requisitarArquivo('../proc/batepapo.php?id_amigo='+id_amigo,batepapo);
	}, 1000);
   },200);
  clearInterval(intervalo);
};