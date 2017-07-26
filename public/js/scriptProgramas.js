$(document).ready(function(){
      $('#tablee').DataTable();
    });

$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/programa"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.programa+"</td><td>"+value.observacion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td><td><a href='/app/crear_reporte_programa/1/"+value.id+"' target='bland_' value="+value.id+" OnClick='Mostrar_reporte(this);' class='btn btn-success'>Imprimir Reporte</a></td></tr>");
			//tablaDatos.append("<tr><td>"+value.programa+"</td><td>"+value.observacion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/programas/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#programa").val(res.programa);
		$("#observacion").val(res.observacion);
		$("#id").val(res.id);
	});
}

function Mostrar_reporte(btn){
	var route = "/programas/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#id_reporte").val(res.id);
	});
}

function Eliminar(btn){
	var route = "/programas/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-programa").fadeIn();
		}
	});
}

$("#actualizarPrograma").click(function(){
	var value = $("#id").val();
	var datos = new FormData($("#frmEditarProgramas")[0]);
	var route = "/programas/"+value+"";
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
			$("#msj-update-programa").fadeIn();
		}
	});
});

