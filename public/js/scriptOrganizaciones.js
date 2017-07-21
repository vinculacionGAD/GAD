$(document).ready(function(){
      $('#tablee').DataTable();
    });

$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/organizacion"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.nombre+"</td><td>"+value.tipo_organizacion+"</td><td>"+value.telefono+"</td><td>"+value.sitio_web+"</td><td>"+value.twitter+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr>");
			//tablaDatos.append("<tr><td>"+value.nombre+"</td><td>"+value.tipo_organizacion+"</td><td>"+value.telefono+"</td><td>"+value.sitio_web+"</td><td>"+value.twitter+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/organizaciones/"+btn.value+"/edit"

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
	var route = "/organizaciones/"+btn.value+"";
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
	var datos = new FormData($("#frmEditaOrganizaciones")[0]);
	var route = "/organizaciones/"+value+"";
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
			$("#msj-update-organizacion").fadeIn();
		}
	});
});

