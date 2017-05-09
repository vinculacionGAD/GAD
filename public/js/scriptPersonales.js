$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/personal"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){			
			tablaDatos.append("<tr><td>"+value.persona+"</td><td>"+value.fecha_inicio+"</td><td>"+value.fecha_fin+"</td><td>"+value.departamento+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/personales/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#fecha_inicio").val(res.fecha_inicio);
		$("#fecha_fin").val(res.fecha_fin);		
		$("#persona_id").val(res.persona_id);		
		$("#departamento_id").val(res.departamento_id);		
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "http://127.0.0.1:8000/personales/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-personal").fadeIn();
		}
	});
}

$("#actualizarPersonal").click(function(){
	var value = $("#id").val();
	var fecha_inicio = $("#fecha_inicio").val();
	var fecha_fin = $("#fecha_fin").val();
	var persona_id = $("#persona_id").val();
	var departamento_id = $("#departamento_id").val();
	var route = "http://127.0.0.1:8000/personales/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data:{ 			
			fecha_inicio: fecha_inicio,
			fecha_fin: fecha_fin,
			persona_id: persona_id,
			departamento_id: departamento_id
		},
		success:  function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-update-personal").fadeIn();
		}
	});
});

