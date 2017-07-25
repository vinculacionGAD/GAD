$(document).ready(function(){
      $('#tablee').DataTable();
    });

$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/voluntario"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){	
			//var codigo = '"'+value.id+'"';			
			tablaDatos.append("<tr><td>"+value.nombres+' '+value.apellido_paterno+' '+value.apellido_materno+"</td><td>"+value.fecha_inicio+"</td><td>"+value.fecha_fin+"</td><td>"+value.trabajo+"</td><td>"+value.nombre_pais+"</td><td>"+value.nombre+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr>");						
		});
	});
}

function Mostrar(btn){
	var route = "/voluntarios/"+btn.value+"/edit"

	$.get(route, function(res){
		$(res).each(function(key, value){
			$("#trabajo").val(value.trabajo);
			$("#fecha_inicio").val(value.fecha_inicio);		
			$("#fecha_fin").val(value.fecha_fin);
			$("#persona_id").val(value.persona_id);
			$("#pais_id").val(value.pais_id);		
			$("#organizacion_id").val(value.organizacion_id);
			$("#rol_voluntario_id").val(value.rol_voluntario_id);
			$("#id").val(value.id);
		});
	});
}

function Eliminar(btn){
	var route = "/voluntarios/"+btn.value+"";
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

$("#actualizarVoluntario").click(function(){
	var value = $("#id").val();
	var datos = new FormData($("#frmEditarVoluntario")[0]);
	var route = "/voluntarios/"+value+"";
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
			$("#msj-update-voluntario").fadeIn();
		}
	});
});
