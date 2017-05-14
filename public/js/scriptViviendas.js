$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/vivienda"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.tipo_construccion+"</td><td>"+value.anios_vida+"</td><td>"+value.ubicacion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr>");
			//tablaDatos.append("<tr><td>"+value.tipo_construccion+"</td><td>"+value.anios_vida+"</td><td>"+value.ubicacion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/viviendas/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#tipo_construccion").val(res.tipo_construccion);
		$("#anios_vida").val(res.anios_vida);
		$("#ubicacion").val(res.ubicacion);
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "/viviendas/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-vivienda").fadeIn();
		}
	});
}

$("#actualizarVivienda").click(function(){
	var value = $("#id").val();
	var datos = new FormData($("#frmEditarViviendas")[0]);
	var route = "/viviendas/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		contentType: false,
		processData: false,	
		data: datos,

		success:  function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-update-vivienda").fadeIn();
		}
	});
});

