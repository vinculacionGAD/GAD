$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "http://127.0.0.1:8000/proyecto"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.proyecto+"</td><td>"+value.fecha_inicio+"</td><td>"+value.fecha_fin+"</td><td>"+value.presupuesto+"</td><td>"+value.moneda+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "http://127.0.0.1:8000/proyectos/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#proyecto").val(res.proyecto);
		$("#status").val(res.status);
		$("#fecha_inicio").val(res.fecha_inicio);
		$("#fecha_fin").val(res.fecha_fin);		
		$("#presupuesto").val(res.presupuesto);		
		$("#moneda").val(res.moneda);		
		$("#observacion").val(res.observacion);		
		$("#organizacion_id").val(res.organizacion_id);		
		$("#programa_id").val(res.programa_id);		
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "http://127.0.0.1:8000/proyectos/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-proyecto").fadeIn();
		}
	});
}

$("#actualizarProyecto").click(function(){
	var value = $("#id").val();
	var proyecto = $("#proyecto").val();	
	var status = $("#status").val();
	var fecha_inicio = $("#fecha_inicio").val();
	var fecha_fin = $("#fecha_fin").val();
	var presupuesto = $("#presupuesto").val();
	var moneda = $("#moneda").val();
	var observacion = $("#observacion").val();
	var programa_id = $("#programa_id").val();
	var organizacion_id = $("#organizacion_id").val();
	var route = "http://127.0.0.1:8000/proyectos/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data:{
			proyecto: proyecto,
			status: status, 			
			fecha_inicio: fecha_inicio,
			fecha_fin: fecha_fin,
			presupuesto: presupuesto,
			moneda: moneda,
			observacion: observacion,
			programa_id: programa_id,
			organizacion_id: organizacion_id
		},
		success:  function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-update-proyecto").fadeIn();
		}
	});
});

