$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "http://127.0.0.1:8000/comunidad"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.comunidad+"</td><td>"+value.observacion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "http://127.0.0.1:8000/comunidades/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#comunidad").val(res.comunidad);
		$("#observacion").val(res.observacion);
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "http://127.0.0.1:8000/comunidades/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-comunidad").fadeIn();
		}
	});
}

$("#actualizarComunidad").click(function(){
	var value = $("#id").val();
	var comunidad = $("#comunidad").val();
	var observacion = $("#observacion").val();
	var route = "http://127.0.0.1:8000/comunidades/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data:{comunidad: comunidad, observacion},
		success:  function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-update-comunidad").fadeIn();
		}
	});
});

