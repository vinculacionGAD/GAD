$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/refugio"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){			
			tablaDatos.append("<tr><td>"+value.nombre_recurso+"</td><td>"+value.direccion+"</td><td>"+value.nombre_contacto+"</td><td>"+value.telefono_contacto+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/refugios/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#nombre_recurso").val(res.nombre_recurso);
		$("#direccion").val(res.direccion);		
		$("#nombre_contacto").val(res.nombre_contacto);		
		$("#telefono_contacto").val(res.telefono_contacto);		
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "http://127.0.0.1:8000/refugios/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-refugio").fadeIn();
		}
	});
}

$("#actualizarRefugio").click(function(){
	var datos = new FormData($("#frmEditaRefugio")[0]);
	var route = "/refugios/"+value+"";
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
			$("#msj-update-refugio").fadeIn();
		}
	});
});

