$(document).ready(function(){
      $('#tablee').DataTable();
    });

$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/persona"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.doc_identificacion+"</td><td>"+value.nombres+" "+value.apellido_paterno+" "+value.apellido_materno+"</td><td>"+value.fecha_nacimiento+"</td><td>"+value.telefono_movil+"</td><td>"+value.estado_civil+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr>");
			//tablaDatos.append("<tr><td>"+value.doc_identificacion+"</td><td>"+value.nombres+" "+value.apellido_paterno+" "+value.apellido_materno+"</td><td>"+value.fecha_nacimiento+"</td><td>"+value.telefono_movil+"</td><td>"+value.estado_civil+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/personas/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#doc_identificacion").val(res.doc_identificacion);
		$("#nombres").val(res.nombres);
		$("#apellido_paterno").val(res.apellido_paterno);
		$("#apellido_materno").val(res.apellido_materno);		
		$("#fecha_nacimiento").val(res.fecha_nacimiento);		
		$("#sexo").val(res.sexo);		
		$("#correo_electronico").val(res.correo_electronico);		
		$("#telefono_movil").val(res.telefono_movil);		
		$("#estado_civil").val(res.estado_civil);		
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "/personas/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-persona").fadeIn();
		}
	});
}

$("#actualizarPersona").click(function(){
	var value = $("#id").val();
	var datos = new FormData($("#frmEditarPersonas")[0]);
	var route = "/personas/"+value+"";
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
			$("#msj-update-persona").fadeIn();
		}
	});
});

