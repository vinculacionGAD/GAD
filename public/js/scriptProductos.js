$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/producto"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.producto+"</td><td>"+value.fecha_elaboracion+"</td><td>"+value.fecha_caducidad+"</td><td>"+value.tipo_producto+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr>");
			//tablaDatos.append("<tr><td>"+value.producto+"</td><td>"+value.fecha_elaboracion+"</td><td>"+value.fecha_caducidad+"</td><td>"+value.tipo_producto_id+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/productos/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#producto").val(res.producto);		
		$("#fecha_elaboracion").val(res.fecha_elaboracion);
		$("#fecha_caducidad").val(res.fecha_caducidad);		
		$("#tipo_producto_id").val(res.tipo_producto_id);				
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "/productos/"+btn.value+"";
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
	var datos = new FormData($("#frmEditarProductos")[0]);	
	var route = "/productos/"+value+"";
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
			$("#msj-update-producto").fadeIn();
		}
	});
});

