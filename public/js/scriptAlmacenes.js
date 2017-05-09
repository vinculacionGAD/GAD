$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/almacen"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){						
			tablaDatos.append("<tr><td>"+value.nombre_recurso+"</td><td>"+value.direccion+"</td><td>"+value.observacion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/almacenes/"+btn.value+"/edit"
	$.get(route, function(res){
		$("#nombre_recurso").val(res.nombre_recurso);
		$("#direccion").val(res.direccion);		
		$("#observacion").val(res.observacion);		
		$("#id").val(res.id);
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
	var datos = new FormData($("#frmEditaAlmacen")[0]);
	var route = "/almacenes/"+value+"";
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
			$("#msj-update-almacen").fadeIn();
		}
	});
});

