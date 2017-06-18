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

$('#persona_hogar_id').blur(function(){
	var persona_hogar_id = $("#persona_hogar_id").val();
    if (persona_hogar_id.indexOf('') == -1) {
  		$('#persona_hogar_id').addClass('error');
      	$('#persona_hogar_id').addClass('error_span');
      	$('#persona_hogar_id').html('Seleccione una familia');
    } else {
    	$('#persona_hogar_id').removeClass('error');
    	$('#persona_hogar_id').removeClass('error_span');
    	$('#span_mensaje_persona_hogar_id').html('');
    }    
});

$('#parentesco').blur(function(){
	var parentesco = $("#parentesco").val();
    if (parentesco.indexOf('') == -1) {
  		$('#parentesco').addClass('error');
      	$('#parentesco').addClass('error_span');
      	$('#parentesco').html('Seleccione el parentesco que tiene');
    } else {
    	$('#parentesco').removeClass('error');
    	$('#parentesco').removeClass('error_span');
    	$('#span_mensaje_parentesco').html('');
    }    
});

$('#actividad_laboral_id').blur(function(){
	var actividad_laboral_id = $("#actividad_laboral_id").val();
    if (actividad_laboral_id.indexOf('') == -1) {
  		$('#actividad_laboral_id').addClass('error');
      	$('#actividad_laboral_id').addClass('error_span');
      	$('#actividad_laboral_id').html('Seleccione una actividad laboral');
    } else {
    	$('#actividad_laboral_id').removeClass('error');
    	$('#actividad_laboral_id').removeClass('error_span');
    	$('#span_mensaje_actividad_laboral_id').html('');
    }    
}); 

$("#registroPersonaHogar").click(function(){
	if($('#persona_id').val() == "" 
		&& $('#parentesco').val() == "" 
		&& $('#actividad_laboral_id').val() == ""
		&& $('#persona_hogar_id').val() == ""){
		
		var animate_in = 'lightSpeedIn',
        animate_out = 'bounceOut';
        	new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        	});

            $('#persona_id').addClass('error');
            $('#parentesco').addClass('error');
            $('#actividad_laboral_id').addClass('error');
            $('#persona_hogar_id').addClass('error');
                
  	}else if($('#persona_id').val() == ""){
        $('#persona_id').addClass('error');
        $('#span_persona_id').addClass('error_span');
        $('#span_mensaje_persona_id').html('Seleccione una persona');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione una persona',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#persona_hogar_id').val() == ""){
        $('#persona_hogar_id').addClass('error');
        $('#span_persona_hogar_id').addClass('error_span');
        $('#span_mensaje_persona_hogar_id').html('Seleccione una familia');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione una familia',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#parentesco').val() == ""){
        $('#parentesco').addClass('error');
        $('#span_parentesco').addClass('error_span');
        $('#span_mensaje_parentesco').html('Seleccione el parentesco');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione el parentesco',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#actividad_laboral_id').val() == ""){
        $('#actividad_laboral_id').addClass('error');
        $('#span_actividad_laboral_id').addClass('error_span');
        $('#span_mensaje_actividad_laboral_id').html('Seleccione una actividad laboral');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione una actividad laboral',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else{  
		registrarPersonaHogar();
  	}
});

function registrarPersonaHogar(){
	var datos = new FormData($("#frmRegistraFamiliaHogares")[0]);
	var route = "/personasHogares"
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
			$("#msj-insert-miembrofamilia").fadeIn();
		}
	});
}