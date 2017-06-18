$('#doc_identificacion').blur(function(){
	var doc_identificacion = $("#doc_identificacion").val();
    if (doc_identificacion.indexOf('') == -1) {
  		$('#doc_identificacion').addClass('error');
      	$('#doc_identificacion').addClass('error_span');
      	$('#doc_identificacion').html('Ingrese su número de cédula');
    } else {
    	$('#doc_identificacion').removeClass('error');
    	$('#doc_identificacion').removeClass('error_span');
    	$('#span_mensaje_doc_identificacion').html('');
    }    
}); 

$('#nombres').blur(function(){
	var nombres = $("#nombres").val();
    if (nombres.indexOf('') == -1) {
  		$('#nombres').addClass('error');
      	$('#nombres').addClass('error_span');
      	$('#nombres').html('Ingrese sus nombres');
    } else {
    	$('#nombres').removeClass('error');
    	$('#nombres').removeClass('error_span');
    	$('#span_mensaje_nombres').html('');
    }    
});

$('#apellido_paterno').blur(function(){
	var apellido_paterno = $("#apellido_paterno").val();
    if (apellido_paterno.indexOf('') == -1) {
  		$('#apellido_paterno').addClass('error');
      	$('#apellido_paterno').addClass('error_span');
      	$('#apellido_paterno').html('Ingrese su apellido_paterno');
    } else {
    	$('#apellido_paterno').removeClass('error');
    	$('#apellido_paterno').removeClass('error_span');
    	$('#span_mensaje_apellido_paterno').html('');
    }    
});

$('#estado_civil').blur(function(){
	var estado_civil = $("#estado_civil").val();
    if (estado_civil.indexOf('') == -1) {
  		$('#estado_civil').addClass('error');
      	$('#estado_civil').addClass('error_span');
      	$('#estado_civil').html('Seleccione su estado civil');
    } else {
    	$('#estado_civil').removeClass('error');
    	$('#estado_civil').removeClass('error_span');
    	$('#span_mensaje_estado_civil').html('');
    }    
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
	var datos = new FormData($("#frmPersonas")[0]);
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