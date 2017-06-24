$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/perdida"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){			
			tablaDatos.append("<tr><td>"+value.doc_identificacion+"</td><td>"+value.nombres+' '+value.apellido_paterno+' '+value.apellido_materno+"</td><td>"+value.descripcion+"</td><td>"+value.monto_estimado+"</td><td>"+value.fecha_perdida+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr>");
			//tablaDatos.append("<tr><td>"+value.nombres+' '+value.apellido_paterno+' '+value.apellido_materno+"</td><td>"+value.fecha_inicio+"</td><td>"+value.fecha_fin+"</td><td>"+value.departamento+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/perdidas/"+btn.value+"/edit"

	$.get(route, function(res){		
		$("#persona_id").val(res.persona_id);		
		$("#descripcion").val(res.descripcion);		
		$("#fecha_perdida").val(res.fecha_perdida);
		$("#monto_estimado").val(res.monto_estimado);		
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "/perdidas/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-perdida").fadeIn();
		}
	});
}

$("#actualizarPerdida").click(function(){
	var value = $("#id").val();
	var datos = new FormData($("#frmEditarPerdidas")[0]);
	var route = "/perdidas/"+value+"";
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
			$("#msj-update-perdida").fadeIn();
		}
	});
});

