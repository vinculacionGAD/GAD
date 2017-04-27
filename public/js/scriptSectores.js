$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "http://127.0.0.1:8000/sector"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.sector+"</td><td>"+value.ubicacion+"</td><td>"+value.observacion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "http://127.0.0.1:8000/sectores/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#sector").val(res.sector);
		$("#abreviatura").val(res.abreviatura);
		$("#ubicacion").val(res.ubicacion);
		$("#observacion").val(res.observacion);		
		$("#comunidad_id").val(res.comunidad_id);		
		//$("#latitud").val(res.latitud);		
		//$("#longitud").val(res.longitud);		
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "http://127.0.0.1:8000/sectores/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-sector").fadeIn();
		}
	});
}

$("#actualizarSector").click(function(){
	var value = $("#id").val();
	var sector = $("#sector").val();	
	var abreviatura = $("#abreviatura").val();
	var ubicacion = $("#ubicacion").val();
	var observacion = $("#observacion").val();
	var comunidad_id = $("#comunidad_id").val();
	//var latitud = $("#latitud").val();
	//var longitud = $("#longitud").val();
	var route = "http://127.0.0.1:8000/sectores/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data:{
			sector: sector,
			abreviatura: abreviatura, 			
			ubicacion: ubicacion,
			observacion: observacion,
			comunidad_id: comunidad_id
			//latitud: latitud,
			//longitud: longitud
		},
		success:  function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-update-sector").fadeIn();
		}
	});
});

