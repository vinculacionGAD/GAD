$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "http://127.0.0.1:8000/organizacion"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.nombre+"</td><td>"+value.tipo_organizacion+"</td><td>"+value.telefono+"</td><td>"+value.sitio_web+"</td><td>"+value.twitter+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "http://127.0.0.1:8000/organizaciones/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#nombre").val(res.nombre);
		$("#acronimo").val(res.acronimo);
		$("#tipo_organizacion").val(res.tipo_organizacion);
		$("#region").val(res.region);		
		$("#telefono").val(res.telefono);		
		$("#sitio_web").val(res.sitio_web);		
		$("#anio").val(res.anio);		
		$("#twitter").val(res.twitter);		
		$("#logotipo").val(res.logotipo);		
		$("#observacion").val(res.observacion);		
		$("#pais_id").val(res.pais_id);		
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "http://127.0.0.1:8000/organizaciones/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-organizacion").fadeIn();
		}
	});
}

$("#actualizarOrganizacion").click(function(){
	var value = $("#id").val();
	var nombre = $("#nombre").val();	
	var acronimo = $("#acronimo").val();
	var tipo_organizacion = $("#tipo_organizacion").val();
	var region = $("#region").val();
	var telefono = $("#telefono").val();
	var sitio_web = $("#sitio_web").val();
	var anio = $("#anio").val();
	var twitter = $("#twitter").val();
	var logotipo = $("#logotipo").val();
	var observacion = $("#observacion").val();
	var pais_id = $("#pais_id").val();
	var route = "http://127.0.0.1:8000/organizaciones/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data:{
			nombre: nombre,
			acronimo: acronimo, 			
			tipo_organizacion: tipo_organizacion,
			region: region,
			telefono: telefono,
			sitio_web: sitio_web,
			anio: anio,
			twitter: twitter,
			logotipo: logotipo,
			observacion: observacion,
			pais_id: pais_id
		},
		success:  function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-update-organizacion").fadeIn();
		}
	});
});

