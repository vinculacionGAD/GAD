$(document).ready(function(){
      $('#tablee').DataTable();
    });

$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/marina"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){	
			var codigo = '"'+value.id+'"';			
			tablaDatos.append("<tr><td>"+value.nombre_recurso+"</td><td>"+value.direccion+"</td><td>"+value.telefono+"</td><td>"+value.n_botes+"</td><td>"+value.n_personas+"</td><td><button value="+value.id+" OnClick='Mostrar("+codigo+");' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr>");
			//tablaDatos.append("<tr><td>"+value.nombre_recurso+"</td><td>"+value.direccion+"</td><td>"+value.telefono_hospital+"</td><td>"+value.n_medicos+"</td><td>"+value.n_enfermeros+"</td><td>"+value.n_quirofano+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/marinas/"+btn+"/edit"
	$.get(route, function(res){
		$(res).each(function(key, value){
			$("#nombre_recurso").val(value.nombre_recurso);
			$("#direccion").val(value.direccion);		
			$("#telefono").val(value.telefono);		
			$("#correo").val(value.correo);		
			$("#tipo_instalacion_id").val(value.tipo_instalacion_id);
			$("#n_botes").val(value.n_botes);
			$("#n_personas").val(value.n_personas);
			$("#observacion").val(value.observacion);
			$("#id").val(value.id);
		});
	});
}

function Eliminar(btn){
	var route = "/marinas/"+btn.value+"";
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

$("#actualizarMarina").click(function(){
	var value = $("#id").val();
	var datos = new FormData($("#frmEditaMarina")[0]);
	var route = "/marinas/"+value+"";
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
			$("#msj-update-marina").fadeIn();
		}
	});
});