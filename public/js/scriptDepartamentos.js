$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "http://127.0.0.1:8000/departamento"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.departamento+"</td><td>"+value.observacion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "http://127.0.0.1:8000/departamentos/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#departamento").val(res.departamento);
		$("#observacion").val(res.observacion);
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "http://127.0.0.1:8000/departamentos/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-departamento").fadeIn();
		}
	});
}

$("#actualizarDepartamento").click(function(){
	var value = $("#id").val();
	var departamento = $("#departamento").val();
	var observacion = $("#observacion").val();
	var route = "http://127.0.0.1:8000/departamentos/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data:{
			departamento: departamento, 
			observacion: observacion
		},
		success:  function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-update-departamento").fadeIn();
		}
	});
});

