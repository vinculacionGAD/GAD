$(document).ready(function(){
      $('#tablee').DataTable();
    });

$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/cruz"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){	
			var codigo = '"'+value.id+'"';			
			tablaDatos.append("<tr><td>"+value.nombre_recurso+"</td><td>"+value.direccion+"</td><td>"+value.telefono+"</td><td>"+value.n_miembros+"</td><td>"+value.n_camas+"</td><td>"+value.n_ambulancias+"</td><td><button value="+value.id+" OnClick='Mostrar("+codigo+");' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr>");			
		});
	});
}

function Mostrar(btn){
	var route = "/cruzRoja/"+btn+"/edit"
	$.get(route, function(res){
		$(res).each(function(key, value){
			$("#nombre_recurso").val(value.nombre_recurso);
			$("#direccion").val(value.direccion);		
			$("#telefono").val(value.telefono);		
			$("#correo").val(value.correo);		
			$("#tipo_instalacion_id").val(value.tipo_instalacion_id);		
			$("#n_miembros").val(value.n_miembros);
			$("#n_camas").val(value.n_camas);
			$("#n_ambulancias").val(value.n_ambulancias);
			$("#observacion").val(value.observacion);
			$("#id").val(value.id);
		});
	});
}

function Eliminar(btn){
	var route = "/cruzRoja/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-cruz-roja").fadeIn();
		}
	});
}

$("#actualizarCruzRoja").click(function(){
	var value = $("#id").val();
	var datos = new FormData($("#frmEditaCruzRoja")[0]);
	var route = "/cruzRoja/"+value+"";
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
			$("#msj-update-cruz-roja").fadeIn();
		}
	});
});