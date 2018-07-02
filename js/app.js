
$("#enviar").on('click',function(e){
	e.preventDefault();
		var form = $('form')[0];
		var formData = new FormData(form);

			$.ajax({
				url: 'enviar.php',
				type: 'POST',
				data: formData,
				processData: false,
				contentType: false,
				success: function(data){
					$("#aqui").html(data);
				}
			});
});
// $(document).ready(function(){
//     $('#enviar').on('click',function(e){
//     	e.preventDefault();
//         $('#form').ajaxForm({
//             uploadProgress: function(event, position, total, percentComplete) {
//                 $('progress').attr('value',percentComplete);
//                 $('#porcentagem').html(percentComplete+'%');
//             },        
//             success: function(data) {
//                 $('progress').attr('value','100');
//                 $('#porcentagem').html('100%');                
//                 if(data.sucesso == true){
//                     $('#aqui').html('<img src="'+ data.msg +'" />');
//                 }
//                 else{
//                     $('#aqui').html(data.msg);
//                 }                
//             },
//             error : function(){
//                 $('#aqui').html('Erro ao enviar requisição!!!');
//             },
//             dataType: 'json',
//             url: 'enviar.php',
//             resetForm: true
//         });
//     });
// })
