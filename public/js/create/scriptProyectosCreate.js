$('#proyecto').blur(function(){
	var proyecto = $("#proyecto").val();
    if (proyecto.indexOf('') == -1) {
  		$('#proyecto').addClass('error');
      	$('#proyecto').addClass('error_span');
      	$('#proyecto').html('Ingrese el nombre del proyecto');
    } else {
    	$('#proyecto').removeClass('error');
    	$('#proyecto').removeClass('error_span');
    	$('#span_mensaje_proyecto').html('');
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

$('#status').blur(function(){
	var status = $("#status").val();
    if (status.indexOf('') == -1) {
  		$('#status').addClass('error');
      	$('#status').addClass('error_span');
      	$('#status').html('Seleccione un estado');
    } else {
    	$('#status').removeClass('error');
    	$('#status').removeClass('error_span');
    	$('#span_mensaje_status').html('');
    }    
}); 

$('#moneda').blur(function(){
	var moneda = $("#moneda").val();
    if (moneda.indexOf('') == -1) {
  		$('#moneda').addClass('error');
      	$('#moneda').addClass('error_span');
      	$('#moneda').html('Seleccione una moneda');
    } else {
    	$('#moneda').removeClass('error');
    	$('#moneda').removeClass('error_span');
    	$('#span_mensaje_moneda').html('');
    }    
}); 

$('#programa_id').blur(function(){
	var programa_id = $("#programa_id").val();
    if (programa_id.indexOf('') == -1) {
  		$('#programa_id').addClass('error');
      	$('#programa_id').addClass('error_span');
      	$('#programa_id').html('Seleccione un programa');
    } else {
    	$('#programa_id').removeClass('error');
    	$('#programa_id').removeClass('error_span');
    	$('#span_mensaje_programa_id').html('');
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

$("#registroProyecto").click(function(){
	if($('#proyecto').val() == ""
		&& $('#fecha_inicio').val() == ""
		&& $('#status').val() == ""
		&& $('#moneda').val() == ""
		&& $('#programa_id').val() == ""
		&& $('#organizacion_id').val() == ""){
		
		var animate_in = 'lightSpeedIn',
        animate_out = 'bounceOut';
        	new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        	});

            $('#proyecto').addClass('error');
            $('#fecha_inicio').addClass('error');
            $('#status').addClass('error');
            $('#moneda').addClass('error');
            $('#programa_id').addClass('error');
            $('#organizacion_id').addClass('error');
                
  	}else if($('#proyecto').val() == ""){
        $('#proyecto').addClass('error');
        $('#span_proyecto').addClass('error_span');
        $('#span_mensaje_proyecto').html('Ingrese el nombre del proyecto');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! ingrese el nombre del proyecto',
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

    }else if($('#status').val() == ""){
        $('#status').addClass('error');
        $('#span_status').addClass('error_span');
        $('#span_mensaje_status').html('Seleccione un estado');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione un estado',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#moneda').val() == ""){
        $('#moneda').addClass('error');
        $('#span_moneda').addClass('error_span');
        $('#span_mensaje_moneda').html('Seleccione una moneda');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione una moneda',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#programa_id').val() == ""){
        $('#programa_id').addClass('error');
        $('#span_programa_id').addClass('error_span');
        $('#span_mensaje_programa_id').html('Seleccione un programa');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione un programa',
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
		registrarProyecto();
  	}
});

function registrarProyecto(){
	var datos = new FormData($("#frmProyectos")[0]);
	var route = "/proyectos"
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
			$("#msj-insert-proyecto").fadeIn();
		}
	});
}