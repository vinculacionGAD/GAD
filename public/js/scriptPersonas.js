
     
   

$(document).ready(function(){
	//Carga();
	 $('#tablee').DataTable();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/persona";
	var datos = ""; 
	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			datos+="<tr><td>"+value.doc_identificacion+"</td><td>"+value.nombres+" "+value.apellido_paterno+" "+value.apellido_materno+"</td><td>"+value.fecha_nacimiento+"</td><td>"+value.telefono_movil+"</td><td>"+value.estado_civil+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr>";
			//tablaDatos.append("<tr><td>"+value.doc_identificacion+"</td><td>"+value.nombres+" "+value.apellido_paterno+" "+value.apellido_materno+"</td><td>"+value.fecha_nacimiento+"</td><td>"+value.telefono_movil+"</td><td>"+value.estado_civil+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});

		tablaDatos.html(datos);
	});
}

function Mostrar(btn){
	var route = "/personas/"+btn.value+"/edit"

	$.get(route, function(res){
		$("#doc_identificacion").val(res.doc_identificacion);
		$("#nombres").val(res.nombres);
		$("#apellido_paterno").val(res.apellido_paterno);
		$("#apellido_materno").val(res.apellido_materno);		
		$("#fecha_nacimiento").val(res.fecha_nacimiento);		
		$("#sexo").val(res.sexo);		
		$("#correo_electronico").val(res.correo_electronico);		
		$("#telefono_movil").val(res.telefono_movil);		
		$("#estado_civil").val(res.estado_civil);		
		$("#id").val(res.id);
	});
}

function Eliminar(btn){
	var route = "/personas/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-delete-persona").fadeIn();
		}
	});
}

$("#actualizarPersona").click(function(){
	var value = $("#id").val();
	var datos = new FormData($("#frmEditarPersonas")[0]);
	var route = "/personas/"+value+"";
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
			$("#msj-update-persona").fadeIn();
		}
	});
});

$("#registroPersona").click(function(){
	if($('#doc_identificacion').val() == "" 
		&& $('#nombres').val() == "" 
		&& $('#apellido_paterno').val() == ""
		&& $('#estado_civil').val() == ""){
		
		var animate_in = 'lightSpeedIn',
        animate_out = 'bounceOut';
        	new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        	});

            $('#doc_identificacion').addClass('error');
            $('#nombres').addClass('error');
            $('#apellido_paterno').addClass('error');
            $('#estado_civil').addClass('error');
                
  	}else if($('#doc_identificacion').val() == ""){
        $('#doc_identificacion').addClass('error');
        $('#span_doc_identificacion').addClass('error_span');
        $('#span_mensaje_doc_identificacion').html('Ingrese el número de identificación');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! ingrese el número de identificación',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#nombres').val() == ""){
        $('#nombres').addClass('error');
        $('#span_nombres').addClass('error_span');
        $('#span_mensaje_nombres').html('Ingrese sus nombres');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! ingrese sus nombres',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#apellido_paterno').val() == ""){
        $('#apellido_paterno').addClass('error');
        $('#span_apellido_paterno').addClass('error_span');
        $('#span_mensaje_apellido_paterno').html('Ingrese su apellido paterno');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! ingrese su apellido paterno',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#estado_civil').val() == ""){
        $('#estado_civil').addClass('error');
        $('#span_estado_civil').addClass('error_span');
        $('#span_mensaje_estado_civil').html('Seleccione su estado civil');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione su estado civil',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else{  
      
		registrarPersona();
  	}
});

function registrarPersona(){ 
  var detalle = []; // declaramos un array
       $("input[type=checkbox]:checked").each(function(){
        var obj = {'id_rol_persona': $(this).val(),} // creamos el obj de los id_rol_persona
        detalle.push(obj); //añadimos el obj al array
        });  
  var detal= JSON.stringify(detalle); // convertimos en json el array

	var datos = new FormData($("#frmPersonas")[0]);
  datos.append('check',detal);
	var route = "/personas"
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',	
		contentType: false,
		processData: false,		
		data: datos,

		success:function(){
			$("#msj-insert-persona").fadeIn();
		}
	});
}

