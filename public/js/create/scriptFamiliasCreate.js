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

$('#sector_id').blur(function(){
	var sector_id = $("#sector_id").val();
    if (sector_id.indexOf('') == -1) {
  		$('#sector_id').addClass('error');
      	$('#sector_id').addClass('error_span');
      	$('#sector_id').html('Seleccione un sector');
    } else {
    	$('#sector_id').removeClass('error');
    	$('#sector_id').removeClass('error_span');
    	$('#span_mensaje_sector_id').html('');
    }    
}); 

$('#tipo_construccion').blur(function(){
	var tipo_construccion = $("#tipo_construccion").val();
    if (tipo_construccion.indexOf('') == -1) {
  		$('#tipo_construccion').addClass('error');
      	$('#tipo_construccion').addClass('error_span');
      	$('#tipo_construccion').html('Seleccione el tipo de construcción de la vivienda');
    } else {
    	$('#tipo_construccion').removeClass('error');
    	$('#tipo_construccion').removeClass('error_span');
    	$('#span_mensaje_tipo_construccion').html('');
    }    
}); 

$('#anios_vida').blur(function(){
	var anios_vida = $("#anios_vida").val();
    if (anios_vida.indexOf('') == -1) {
  		$('#anios_vida').addClass('error');
      	$('#anios_vida').addClass('error_span');
      	$('#anios_vida').html('Ingrese los años de vida de la vivienda');
    } else {
    	$('#anios_vida').removeClass('error');
    	$('#anios_vida').removeClass('error_span');
    	$('#span_mensaje_anios_vida').html('');
    }    
}); 

$("#registroFamilia").click(function(){
	if($('#persona_id').val() == "" 
		&& $('#parentesco').val() == "" 
		&& $('#actividad_laboral_id').val() == ""
		&& $('#sector_id').val() == ""
		&& $('#tipo_construccion').val() == ""
		&& $('#anios_vida').val() == ""){
		
		var animate_in = 'lightSpeedIn',
        animate_out = 'bounceOut';
        	new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        	});

            $('#persona_id').addClass('error');
            $('#parentesco').addClass('error');
            $('#actividad_laboral_id').addClass('error');
            $('#sector_id').addClass('error');
            $('#tipo_construccion').addClass('error');
            $('#anios_vida').addClass('error');
                
  	}else if($('#persona_id').val() == ""){
        $('#persona_id').addClass('error');
        $('#span_persona_id').addClass('error_span');
        $('#span_mensaje_persona_id').html('Seleccione una persona');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione una persona',
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

    }else if($('#sector_id').val() == ""){
        $('#sector_id').addClass('error');
        $('#span_sector_id').addClass('error_span');
        $('#span_mensaje_sector_id').html('Seleccione el sector donde vie');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione el sector donde vive',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#tipo_construccion').val() == ""){
        $('#tipo_construccion').addClass('error');
        $('#span_tipo_construccion').addClass('error_span');
        $('#span_mensaje_tipo_construccion').html('Seleccione el tipo de construcción de la vivienda');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione el tipo de construcción de la vivienda',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#anios_vida').val() == ""){
        $('#anios_vida').addClass('error');
        $('#span_anios_vida').addClass('error_span');
        $('#span_mensaje_anios_vida').html('Ingrese el número de años de la vivienda');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! ingrese el número de años de la vivienda',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else{  
		registrarFamilia();
  	}
});

function registrarFamilia(){
	var datos = new FormData($("#frmRegistraFamilia")[0]);
	var route = "/familias"
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
			$("#msj-insert-familia").fadeIn();
		}
	});
}