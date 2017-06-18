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

$("#registroProveedor").click(function(){
	if($('#persona_id').val() == ""){
		
		var animate_in = 'lightSpeedIn',
        animate_out = 'bounceOut';
        	new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        	});

            $('#persona_id').addClass('error');
                
  	}else if($('#persona_id').val() == ""){
        $('#persona_id').addClass('error');
        $('#span_persona_id').addClass('error_span');
        $('#span_mensaje_persona_id').html('Seleccione una persona');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! seleccione una persona',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else{  
		registrarProveedor();
  	}
});

function registrarProveedor(){	
	var datos = new FormData($("#frmProveedores")[0]);		
	var route = "/proveedores"
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
			$("#msj-insert-proveedor").fadeIn();
		}
	});
}