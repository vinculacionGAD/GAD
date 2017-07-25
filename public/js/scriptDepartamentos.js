$(document).ready(function(){
      $('#tablee').DataTable();
    });

$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/departamento"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.departamento+"</td><td>"+value.observacion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr>");
			//tablaDatos.append("<tr><td>"+value.departamento+"</td><td>"+value.observacion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "/departamentos/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#departamento").val(res.departamento);
		$("#observacion").val(res.observacion);
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "/departamentos/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-departamento").fadeIn();
		}
	});
}

$("#actualizarDepartamento").click(function(){
	var value = $("#id").val();
	var datos = new FormData($("#frmEditarDepartamento")[0]);
	var route = "/departamentos/"+value+"";
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
			$("#msj-update-departamento").fadeIn();
		}
	});
});

