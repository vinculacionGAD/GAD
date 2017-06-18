$("#registroVivienda").click(function(){
	var datos = new FormData($("#frmViviendas")[0]);	
	var route = "/viviendas"
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
			$("#msj-insert-vivienda").fadeIn();
		}
	});
});