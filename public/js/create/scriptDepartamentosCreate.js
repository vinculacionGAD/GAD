$('#departamento').blur(function(){
	var departamento = $("#departamento").val();
    if (departamento.indexOf('') == -1) {
  		$('#departamento').addClass('error');
      	$('#departamento').addClass('error_span');
      	$('#departamento').html('Ingrese el nombre del Departamento');
    } else {
    	$('#departamento').removeClass('error');
    	$('#departamento').removeClass('error_span');
    	$('#span_mensaje_departamento').html('');
    }    
}); 

$("#registroDepartamento").click(function(){
	if($('#departamento').val() == ""){
		
		var animate_in = 'lightSpeedIn',
        animate_out = 'bounceOut';
        	new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        	});

            $('#departamento').addClass('error');
                
  	}else if($('#departamento').val() == ""){
        $('#departamento').addClass('error');
        $('#span_departamento').addClass('error_span');
        $('#span_mensaje_departamento').html('Ingrese el nombre del departamento');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! ingrese el nombre del departamento',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else{  
		registrarDepartamento();
  	}
});

function registrarDepartamento(){
	var datos = new FormData($("#frmDepartamento")[0]);
	var route = "/departamentos"
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
			$("#msj-insert-departamento").fadeIn();
		}
	});
}