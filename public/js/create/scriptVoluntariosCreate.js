$('#trabajo').blur(function(){
	var trabajo = $("#trabajo").val();
    if (trabajo.indexOf('') == -1) {
  		$('#trabajo').addClass('error');
      	$('#trabajo').addClass('error_span');
      	$('#trabajo').html('Ingrese el nombre del trabajo');
    } else {
    	$('#trabajo').removeClass('error');
    	$('#trabajo').removeClass('error_span');
    	$('#span_mensaje_trabajo').html('');
    }    
}); 

$('#fecha_inicio').blur(function(){
	var fecha_inicio = $("#fecha_inicio").val();
    if (fecha_inicio.indexOf('') == -1) {
  		$('#fecha_inicio').addClass('error');
      	$('#fecha_inicio').addClass('error_span');
      	$('#fecha_inicio').html('Seleccione una fecha de inicio');
    } else {
    	$('#fecha_inicio').removeClass('error');
    	$('#fecha_inicio').removeClass('error_span');
    	$('#span_mensaje_fecha_inicio').html('');
    }    
}); 

$('#fecha_fin').blur(function(){
	var fecha_fin = $("#fecha_fin").val();
    if (fecha_fin.indexOf('') == -1) {
  		$('#fecha_fin').addClass('error');
      	$('#fecha_fin').addClass('error_span');
      	$('#fecha_fin').html('Seleccione una fecha de fin');
    } else {
    	$('#fecha_fin').removeClass('error');
    	$('#fecha_fin').removeClass('error_span');
    	$('#span_mensaje_fecha_fin').html('');
    }    
});

$('#persona_id').blur(function(){
	var persona_id = $("#persona_id").val();
    if (persona_id.indexOf('') == -1) {
  		$('#persona_id').addClass('error');
      	$('#persona_id').addClass('error_span');
      	$('#persona_id').html('Seleccione una persona');
    } else {
    	$('#persona_id').removeClass('error');
    	$('#persona_id').removeClass('error_span');
    	$('#span_mensaje_persona_id').html('');
    }    
}); 

$('#pais_id').blur(function(){
	var pais_id = $("#pais_id").val();
    if (pais_id.indexOf('') == -1) {
  		$('#pais_id').addClass('error');
      	$('#pais_id').addClass('error_span');
      	$('#pais_id').html('Seleccione un pais');
    } else {
    	$('#pais_id').removeClass('error');
    	$('#pais_id').removeClass('error_span');
    	$('#span_mensaje_pais_id').html('');
    }    
}); 

$('#organizacion_id').blur(function(){
	var organizacion_id = $("#organizacion_id").val();
    if (organizacion_id.indexOf('') == -1) {
  		$('#organizacion_id').addClass('error');
      	$('#organizacion_id').addClass('error_span');
      	$('#organizacion_id').html('Seleccione una organización');
    } else {
    	$('#organizacion_id').removeClass('error');
    	$('#organizacion_id').removeClass('error_span');
    	$('#span_mensaje_organizacion_id').html('');
    }    
}); 

$('#rol_voluntario_id').blur(function(){
	var rol_voluntario_id = $("#rol_voluntario_id").val();
    if (rol_voluntario_id.indexOf('') == -1) {
  		$('#rol_voluntario_id').addClass('error');
      	$('#rol_voluntario_id').addClass('error_span');
      	$('#rol_voluntario_id').html('Seleccione un rol del voluntario');
    } else {
    	$('#rol_voluntario_id').removeClass('error');
    	$('#rol_voluntario_id').removeClass('error_span');
    	$('#span_mensaje_rol_voluntario_id').html('');
    }    
});

$("#registroVoluntario").click(function(){
	if($('#trabajo').val() == ""
		&& $('#fecha_inicio').val() == ""
		&& $('#fecha_fin').val() == ""
		&& $('#persona_id').val() == ""
		&& $('#pais_id').val() == ""
		&& $('#rol_voluntario_id').val() == ""
		&& $('#organizacion_id').val() == ""){
		
		var animate_in = 'lightSpeedIn',
        animate_out = 'bounceOut';
        	new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        	});

            $('#trabajo').addClass('error');
            $('#fecha_inicio').addClass('error');
            $('#fecha_fin').addClass('error');
            $('#persona_id').addClass('error');
            $('#pais_id').addClass('error');
            $('#rol_voluntario_id').addClass('error');
            $('#organizacion_id').addClass('error');
                
  	}else if($('#trabajo').val() == ""){
        $('#trabajo').addClass('error');
        $('#span_trabajo').addClass('error_span');
        $('#span_mensaje_trabajo').html('Ingrese el nombre del trabajo');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! ingrese el nombre del trabajo',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#fecha_inicio').val() == ""){
        $('#fecha_inicio').addClass('error');
        $('#span_fecha_inicio').addClass('error_span');
        $('#span_mensaje_fecha_inicio').html('Seleccione una fecha de inicio');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione una fecha de inicio',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#fecha_fin').val() == ""){
        $('#fecha_fin').addClass('error');
        $('#span_fecha_fin').addClass('error_span');
        $('#span_mensaje_fecha_fin').html('Seleccione una fecha de fin');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione una fecha de fin',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });    

    }else if($('#persona_id').val() == ""){
        $('#persona_id').addClass('error');
        $('#span_persona_id').addClass('error_span');
        $('#span_mensaje_persona_id').html('Seleccione una persona');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione una persona',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#pais_id').val() == ""){
        $('#pais_id').addClass('error');
        $('#span_pais_id').addClass('error_span');
        $('#span_mensaje_pais_id').html('Seleccione una pais');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione una pais',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#rol_voluntario_id').val() == ""){
        $('#rol_voluntario_id').addClass('error');
        $('#span_rol_voluntario_id').addClass('error_span');
        $('#span_mensaje_rol_voluntario_id').html('Seleccione un rol');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione un rol',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#organizacion_id').val() == ""){
        $('#organizacion_id').addClass('error');
        $('#span_organizacion_id').addClass('error_span');
        $('#span_mensaje_organizacion_id').html('Seleccione una organización');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione una organización',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else{  
		registrarVoluntario();
  	}
});

function registrarVoluntario(){
	var datos = new FormData($("#frmVoluntarios")[0]);	
	var route = "/voluntarios"
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
			$("#msj-insert-voluntario").fadeIn();
		}
	});
}