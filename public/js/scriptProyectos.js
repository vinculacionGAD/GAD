$(document).ready(function(){
      $('#tablee').DataTable();
    });

$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/proyecto"

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.proyecto+"</td><td>"+value.fecha_inicio+"</td><td>"+value.fecha_fin+"</td><td>"+value.presupuesto+"</td><td>"+value.moneda+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr>");
			//tablaDatos.append("<tr><td>"+value.proyecto+"</td><td>"+value.fecha_inicio+"</td><td>"+value.fecha_fin+"</td><td>"+value.presupuesto+"</td><td>"+value.moneda+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function cargar_datos(id){
	var route = "/proyectos/"+id+"/edit"

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
	var route = "/proyectos/"+btn.value+"";
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

function EliminarProyectos(id){

    swal({ 
		title: "¿Deseas Elimar el Proyecto?",
		text: "",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "¡Eliminar!",
		cancelButtonText: "No,Cancelar", 
		closeOnConfirm: false,
		closeOnCancel: false },

		function(isConfirm){ 
		if (isConfirm){
			var route  ="/proyectos/"+id+"";
		    var token  =$("#token").val();
		    $.ajax({
			    url: route,
			    headers :{'X-CSRF-TOKEN': token},
			    type: 'delete',
			    dataType:'json',
			        success:function(res){
			         if(res.sms=='ok'){
						swal("¡Hecho!","Proyecto Eliminado Correctamente","success"); 
			            //$("#datatable").load("/lista_usuarios");
			          }          
			        }
		 	     });
        }else { 
			swal("¡Error !","No se pudo Eliminar el Usuario ","error"); 
		} 
	});
}

$("#actualizarProyecto").click(function(){
	var value = $("#id").val();
	var datos = new FormData($("#frmEditarProyectos")[0]);
	var route = "/proyectos/"+value+"";
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
			$("#msj-update-proyecto").fadeIn();
		}
	});
});

