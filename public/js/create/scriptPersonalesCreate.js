$('#persona_id').blur(function(){
	var persona_id = $("#persona_id").val();
    if (persona_id.indexOf('') == -1) {
  		$('#persona_id').addClass('error');
      	$('#persona_id').addClass('error_span');
      	$('#persona_id').html('Seleccione una persona que sea jefe de hogar');
    } else {
    	$('#persona_id').removeClass('error');
    	$('#persona_id').removeClass('error_span');
    	$('#span_mensaje_persona_id').html('');
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

$('#departamento_id').blur(function(){
	var departamento_id = $("#departamento_id").val();
    if (departamento_id.indexOf('') == -1) {
  		$('#departamento_id').addClass('error');
      	$('#departamento_id').addClass('error_span');
      	$('#departamento_id').html('Seleccione un departamento');
    } else {
    	$('#departamento_id').removeClass('error');
    	$('#departamento_id').removeClass('error_span');
    	$('#span_mensaje_departamento_id').html('');
    }    
}); 

$("#registroPersonal").click(function(){
	if($('#persona_id').val() == "" 
		&& $('#fecha_inicio').val() == "" 
		&& $('#fecha_fin').val() == ""
		&& $('#departamento_id').val() == ""){
		
		var animate_in = 'lightSpeedIn',
        animate_out = 'bounceOut';
        	new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        	});

            $('#persona_id').addClass('error');
            $('#fecha_inicio').addClass('error');
            $('#fecha_fin').addClass('error');
            $('#departamento_id').addClass('error');
                
  	}else if($('#persona_id').val() == ""){
        $('#persona_id').addClass('error');
        $('#span_persona_id').addClass('error_span');
        $('#span_mensaje_persona_id').html('Seleccione una persona');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione una persona',
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

    }else if($('#departamento_id').val() == ""){
        $('#departamento_id').addClass('error');
        $('#span_departamento_id').addClass('error_span');
        $('#span_mensaje_departamento_id').html('Seleccione un departamento');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione un departamento',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else{  
		registrarPersonal();
  	}
});

function registrarPersonal(){
	var datos = new FormData($("#frmPersonales")[0]);
	var route = "/personales"
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
			$("#msj-insert-personal").fadeIn();
		}
	});
}