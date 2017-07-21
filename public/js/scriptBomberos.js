$(document).ready(function(){
      $('#tablee').DataTable();
    });

$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/bombero"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){	
			var codigo = '"'+value.id+'"';			
			tablaDatos.append("<tr><td>"+value.nombre_recurso+"</td><td>"+value.direccion+"</td><td>"+value.telefono+"</td><td>"+value.n_bomberos+"</td><td>"+value.n_carros+"</td><td><button value="+value.id+" OnClick='Mostrar("+codigo+");' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr>");
			//tablaDatos.append("<tr><td>"+value.nombre_recurso+"</td><td>"+value.direccion+"</td><td>"+value.telefono_hospital+"</td><td>"+value.n_medicos+"</td><td>"+value.n_enfermeros+"</td><td>"+value.n_quirofano+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/bomberos/"+btn+"/edit"
	$.get(route, function(res){
		$(res).each(function(key, value){
			$("#nombre_recurso").val(value.nombre_recurso);
			$("#direccion").val(value.direccion);		
			$("#telefono").val(value.telefono);		
			$("#correo").val(value.correo);		
			$("#tipo_instalacion_id").val(value.tipo_instalacion_id);		
			$("#n_bomberos").val(value.n_bomberos);
			$("#n_carros").val(value.n_carros);
			$("#observacion").val(value.observacion);
			$("#id").val(value.id);
		});
	});
}

function Eliminar(btn){
	var route = "/bomberos/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-bomberos").fadeIn();
		}
	});
}

$("#actualizarBombero").click(function(){
	var value = $("#id").val();
	var datos = new FormData($("#frmEditaBombero")[0]);
	var route = "/bomberos/"+value+"";
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
			$("#msj-update-bombero").fadeIn();
		}
	});
});