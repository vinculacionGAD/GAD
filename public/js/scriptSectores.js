$(document).ready(function(){
      $('#tablee').DataTable();
    });

$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/sector"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.sector+"</td><td>"+value.ubicacion+"</td><td>"+value.observacion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr>");
			//tablaDatos.append("<tr><td>"+value.sector+"</td><td>"+value.ubicacion+"</td><td>"+value.observacion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/sectores/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#sector").val(res.sector);
		$("#abreviatura").val(res.abreviatura);
		$("#ubicacion").val(res.ubicacion);
		$("#observacion").val(res.observacion);		
		$("#comunidad_id").val(res.comunidad_id);		
		$("#latitud").val(res.latitud);		
		$("#longitud").val(res.longitud);		
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "/sectores/"+btn.value+"";
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
	var datos = new FormData($("#frmEditarSectores")[0]);
	var route = "/sectores/"+value+"";
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
			$("#msj-update-sector").fadeIn();
		}
	});
});

