$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "http://127.0.0.1:8000/vivienda"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.tipo_construccion+"</td><td>"+value.anios_vida+"</td><td>"+value.ubicacion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "http://127.0.0.1:8000/viviendas/"+btn.value+"/edit"

	$.get(route, function(res){
		//console.log(res.tipo_construccion);
		$("#tipo_construccion").val(res.tipo_construccion);
		$("#anios_vida").val(res.anios_vida);
		$("#ubicacion").val(res.ubicacion);
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "http://127.0.0.1:8000/viviendas/"+btn.value+"";
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
	var tipo_construccion = $("#tipo_construccion").val();
	var anios_vida = $("#anios_vida").val();
	var ubicacion = $("#ubicacion").val();
	var route = "http://127.0.0.1:8000/viviendas/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data:{tipo_construccion: tipo_construccion, anios_vida: anios_vida, ubicacion:ubicacion},
		success:  function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-update-vivienda").fadeIn();
		}
	});
});

