$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/hospital"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){			
			tablaDatos.append("<tr><td>"+value.nombre_recurso+"</td><td>"+value.direccion+"</td><td>"+value.telefono_hospital+"</td><td>"+value.n_medicos+"</td><td>"+value.n_enfermeros+"</td><td>"+value.n_quirofano+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/hospitales/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#nombre_recurso").val(res.nombre_recurso);
		$("#direccion").val(res.direccion);		
		$("#telefono").val(res.telefono);		
		$("#correo").val(res.correo);		
		$("#n_medicos").val(res.n_medicos);
		$("#n_enfermeros").val(res.n_enfermeros);
		$("#n_quirofano").val(res.n_quirofano);		
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "http://127.0.0.1:8000/hospitales/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-hospitales").fadeIn();
		}
	});
}

$("#actualizarHospital").click(function(){
	var datos = new FormData($("#frmEditaHospital")[0]);
	var route = "/hospitales/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		contentType: false,
		processData: false,	
		data: datos,

		success:  function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-update-hospital").fadeIn();
		}
	});
});