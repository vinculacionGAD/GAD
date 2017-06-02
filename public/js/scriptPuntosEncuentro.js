$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/puntoEncuentro"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.latitud+"</td><td>"+value.longitud+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr>");
			//tablaDatos.append("<tr><td>"+value.comunidad+"</td><td>"+value.observacion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/puntosEncuentro/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#latitud").val(res.latitud);
		$("#longitud").val(res.longitud);
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "/puntosEncuentro/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-puntoEncuentro").fadeIn();
		}
	});
}

$("#actualizarPuntoEncuentro").click(function(){
	var value = $("#id").val();
	var datos = new FormData($("#frmEditaPuntoEncuentro")[0]);
	var route = "/puntosEncuentro/"+value+"";
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
			$("#msj-update-puntoEncuentro").fadeIn();
		}
	});
});