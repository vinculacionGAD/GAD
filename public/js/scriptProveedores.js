$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "http://127.0.0.1:8000/proveedor"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.persona_id+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "http://127.0.0.1:8000/proveedores/"+btn.value+"/edit"

	$.get(route, function(res){		
		$("#persona_id").val(res.persona_id);	
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "http://127.0.0.1:8000/proveedores/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-proveedor").fadeIn();
		}
	});
}

$("#actualizarProveedor").click(function(){
	var value = $("#id").val();
	var persona_id = $("#persona_id").val();
	var route = "http://127.0.0.1:8000/proveedores/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data:{
			persona_id: persona_id
		},
		success:  function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-update-proveedor").fadeIn();
		}
	});
});

