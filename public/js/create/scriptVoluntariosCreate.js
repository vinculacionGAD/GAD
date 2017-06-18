$("#registroVoluntarios").click(function(){
	var datos = new FormData($("#frmVoluntarios")[0]);	
	var route = "/voluntario"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		contentType: false,
		processData: false,	
		data: datos,

		success:function(){
			$("#msj-insert-voluntario").fadeIn();
		}
	});
});