$("#registroPuntoEncuentro").click(function(){
	var datos = new FormData($("#frmPuntoEncuentro")[0]);	
	var route = "/puntosEncuentro"
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
			$("#msj-insert-puntoEncuentro").fadeIn();
		}
	});
});