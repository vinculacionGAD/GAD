$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/almacen"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){	
			var codigo = '"'+value.id+'"';					
			tablaDatos.append("<tr><td>"+value.nombre_recurso+"</td><td>"+value.direccion+"</td><td>"+value.observacion+"</td><td><button value="+value.id+" OnClick='Mostrar("+codigo+");' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr>");
			//tablaDatos.append("<tr><td>"+value.nombre_recurso+"</td><td>"+value.direccion+"</td><td>"+value.observacion+"</td><td><button value="+value.id+" OnClick='Mostrar("+codigo+");' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/almacenes/"+btn+"/edit"	
	$.get(route, function(res){
		$(res).each(function(key, value){
			$("#nombre_recurso").val(value.nombre_recurso);
			$("#direccion").val(value.direccion);		
			$("#telefono").val(value.telefono);
			$("#correo").val(value.correo);
			$("#tipo_instalacion_id").val(value.tipo_instalacion_id);
			$("#observacion").val(value.observacion);		
			$("#latitud").val(value.latitud);
			$("#longitud").val(value.longitud);
			$("#id").val(value.id);
		});			
	});
}

function Eliminar(btn){
	var route = "/almacenes/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-almacen").fadeIn();
		}
	});
}

$("#actualizarAlmacen").click(function(){
	var value = $("#id").val();
	var datos = new FormData($("#frmEditaAlmacenes")[0]);
	var route = "/almacenes/"+value+"";
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
			$("#msj-update-almacen").fadeIn();
		}
	});
});