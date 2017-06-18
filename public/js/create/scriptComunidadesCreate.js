$('#comunidad').blur(function(){
	var comunidad = $("#comunidad").val();
    if (comunidad.indexOf('') == -1) {
  		$('#comunidad').addClass('error');
      	$('#comunidad').addClass('error_span');
      	$('#comunidad').html('Ingrese el Nombre de la Comunidad');
    } else {
    	$('#comunidad').removeClass('error');
    	$('#comunidad').removeClass('error_span');
    	$('#span_mensaje_comunidad').html('');
    }    
}); 

$("#registroComunidad").click(function(){
	if($('#comunidad').val() == ""){
		
		var animate_in = 'lightSpeedIn',
        animate_out = 'bounceOut';
        	new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        	});

            $('#comunidad').addClass('error');
                
  	}else if($('#comunidad').val() == ""){
        $('#comunidad').addClass('error');
        $('#span_comunidad').addClass('error_span');
        $('#span_mensaje_comunidad').html('Ingrese el nombre de la comunidad');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! ingrese el nombre de la comunidad',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else{  
		registrarComunidad();
  	}
});

function registrarComunidad(){
	var datos = new FormData($("#frmComunidad")[0]);	
	var route = "/comunidades"
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
			$("#msj-insert-comunidad").fadeIn();
		}/*,
		error:function(msj){
			//console.log(msj.responseJSON.comunidad);
			$("#msj-comunidad").html(msj.responseJSON.comunidad);
			$("#msj-observacion").html(msj.responseJSON.observacion);
			$("#msj-error-comunidad").fadeIn();
			$("#msj-error-observacion").fadeIn();
		}*/
	});
}