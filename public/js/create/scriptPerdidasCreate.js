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

$('#fecha_perdida').blur(function(){
	var fecha_perdida = $("#fecha_perdida").val();
    if (fecha_perdida.indexOf('') == -1) {
  		$('#fecha_perdida').addClass('error');
      	$('#fecha_perdida').addClass('error_span');
      	$('#fecha_perdida').html('Seleccione una fecha de pérdida');
    } else {
    	$('#fecha_perdida').removeClass('error');
    	$('#fecha_perdida').removeClass('error_span');
    	$('#span_mensaje_fecha_perdida').html('');
    }    
});

$('#descripcion').blur(function(){
	var descripcion = $("#descripcion").val();
    if (descripcion.indexOf('') == -1) {
  		$('#descripcion').addClass('error');
      	$('#descripcion').addClass('error_span');
      	$('#descripcion').html('Escriba una descripción de la pérdida');
    } else {
    	$('#descripcion').removeClass('error');
    	$('#descripcion').removeClass('error_span');
    	$('#span_mensaje_descripcion').html('');
    }    
});

$('#monto_estimado').blur(function(){
	var monto_estimado = $("#monto_estimado").val();
    if (monto_estimado.indexOf('') == -1) {
  		$('#monto_estimado').addClass('error');
      	$('#monto_estimado').addClass('error_span');
      	$('#monto_estimado').html('Escriba el monto estimado de la pérdida');
    } else {
    	$('#monto_estimado').removeClass('error');
    	$('#monto_estimado').removeClass('error_span');
    	$('#span_mensaje_monto_estimado').html('');
    }    
}); 

$("#registroPerdida").click(function(){
	if($('#persona_id').val() == "" 
		&& $('#descripcion').val() == "" 
		&& $('#monto_estimado').val() == ""
		&& $('#fecha_perdida').val() == ""){
		
		var animate_in = 'lightSpeedIn',
        animate_out = 'bounceOut';
        	new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        	});

            $('#persona_id').addClass('error');
            $('#descripcion').addClass('error');
            $('#monto_estimado').addClass('error');
            $('#fecha_perdida').addClass('error');
                
  	}else if($('#persona_id').val() == ""){
        $('#persona_id').addClass('error');
        $('#span_persona_id').addClass('error_span');
        $('#span_mensaje_persona_id').html('Seleccione una persona');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione una persona',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#descripcion').val() == ""){
        $('#descripcion').addClass('error');
        $('#span_descripcion').addClass('error_span');
        $('#span_mensaje_descripcion').html('Escriba una descripción de la pérdida');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! escriba una descripción de la pérdida',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#fecha_perdida').val() == ""){
        $('#fecha_perdida').addClass('error');
        $('#span_fecha_perdida').addClass('error_span');
        $('#span_mensaje_fecha_perdida').html('Seleccione una fecha de la pérdida');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione una fecha de la pérdida',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#monto_estimado').val() == ""){
        $('#monto_estimado').addClass('error');
        $('#span_monto_estimado').addClass('error_span');
        $('#span_mensaje_monto_estimado').html('Ingrese un monto estimado de la pérdida');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! ingrese un monto estimado de la pérdida',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else{  
		registrarPerdida();
  	}
});

function registrarPerdida(){
	var datos = new FormData($("#frmPerdidas")[0]);
	var route = "/perdidas"
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
			$("#msj-insert-perdida").fadeIn();
		}
	});
}