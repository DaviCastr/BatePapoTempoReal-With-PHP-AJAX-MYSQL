$(document).foundation();
var formu = document.getElementById('formbatepapo');
var mensagem = document.getElementById('mensagem');
var batepapo = document.getElementById("batepapo");
var gravar = document.getElementById("gravar");
var amig = document.getElementById("amigos");
requisitarArquivo("../proc/amigos.php",amig);
// var btnbp = document.getElementById("btnbatepapo");
// var CBP = document.getElementById("campoBatepapo");
// btnbp.onclick = function(){
// requisitarArquivo("../codigos/batepapo.php",CBP);
setInterval(function () {
     requisitarArquivo("../proc/batepapo.php",batepapo);
}, 1000/* 1s */);
setInterval(function () {
     requisitarArquivo("../proc/amigos.php",amig);
}, 10000/* 1s */);
// }
// var interval = setInterval(function () {
//         var date = new Date();
//         gravar.innerHTML = date.toLocaleTimeString();

//         if (date.getSeconds() % 5 == 0) {
//             gravar.innerHTML = "Intervalo cancelado :)";
//             clearInterval(interval);
//         }
//     }, 10000/* 1s */);
// mensagem.onchange = function(){
// 	requisitarArquivo("../proc/batepapo.php",batepapo);
// }
// mensagem.onfocus = function(){
// 	requisitarArquivo("../proc/batepapo.php",batepapo);
// }
// mensagem.onkeyup = function(){
// 	requisitarArquivo("../proc/batepapo.php",batepapo);
// }
// batepapo.onmouseover = function(){
// 	requisitarArquivo("../proc/batepapo.php",batepapo);
// }
formu.onsubmit = function (e) {
	e.preventDefault();
	// var ajax = iniciarAjax();
 //       ajax.open("POST", "proc/gravaM.php",gravar);
	requisitarArquivo("../proc/gravaM.php?mensagem="+mensagem.value,gravar);
	mensagem.value="";
};
