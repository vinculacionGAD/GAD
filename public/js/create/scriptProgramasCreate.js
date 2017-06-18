$('#programa').blur(function(){
	var programa = $("#programa").val();
    if (programa.indexOf('') == -1) {
  		$('#programa').addClass('error');
      	$('#programa').addClass('error_span');
      	$('#programa').html('Escriba el nombre del programa');
    } else {
    	$('#programa').removeClass('error');
    	$('#programa').removeClass('error_span');
    	$('#span_mensaje_programa').html('');
    }    
}); 

$("#registroPrograma").click(function(){
	if($('#programa').val() == ""){
		
		var animate_in = 'lightSpeedIn',
        animate_out = 'bounceOut';
        	new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios o no se han seleccionado',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        	});

            $('#programa').addClass('error');
                
  	}else if($('#programa').val() == ""){
        $('#programa').addClass('error');
        $('#span_programa').addClass('error_span');
        $('#span_mensaje_programa').html('Ingrese el nombre del programa');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! ingrese el nombre del programa',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else{  
		registrarPrograma();
  	}
});

function registrarPrograma(){
	var datos = new FormData($("#frmProgramas")[0]);
	var route = "/programas"
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
			$("#msj-insert-programa").fadeIn();
		}
	});
}