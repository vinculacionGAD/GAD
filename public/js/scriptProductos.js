$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "http://127.0.0.1:8000/producto"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.producto+"</td><td>"+value.fecha_elaboracion+"</td><td>"+value.fecha_caducidad+"</td><td>"+value.tipo_producto_id+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "http://127.0.0.1:8000/productos/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#producto").val(res.producto);		
		$("#fecha_elaboracion").val(res.fecha_elaboracion);
		$("#fecha_caducidad").val(res.fecha_caducidad);		
		$("#tipo_producto_id").val(res.tipo_producto_id);				
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "http://127.0.0.1:8000/productos/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-producto").fadeIn();
		}
	});
}

$("#actualizarProducto").click(function(){
	var value = $("#id").val();
	var producto = $("#producto").val();
	var fecha_elaboracion = $("#fecha_elaboracion").val();
	var fecha_caducidad = $("#fecha_caducidad").val();
	var tipo_producto_id = $("#tipo_producto_id").val();	
	var route = "http://127.0.0.1:8000/productos/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data:{ 			
			producto: producto,
			fecha_elaboracion: fecha_elaboracion,
			fecha_caducidad: fecha_caducidad,
			tipo_producto_id: tipo_producto_id			
		},
		success:  function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-update-producto").fadeIn();
		}
	});
});

