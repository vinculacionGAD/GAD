$('#sector').blur(function(){
	var sector = $("#sector").val();
    if (sector.indexOf('') == -1) {
  		$('#sector').addClass('error');
      	$('#sector').addClass('error_span');
      	$('#sector').html('Ingrese Nombre del Sector');
    } else {
    	$('#sector').removeClass('error');
    	$('#sector').removeClass('error_span');
    	$('#span_mensaje_sector').html('');
    }    
});

$("#registroSector").click(function(){
	if($('#sector').val() == ""){
		
		var animate_in = 'lightSpeedIn',
        animate_out = 'bounceOut';
        	new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        	});

            $('#sector').addClass('error');
                
  	}else if($('#sector').val() == ""){
        $('#sector').addClass('error');
        $('#span_sector').addClass('error_span');
        $('#span_mensaje_sector').html('Ingrese el nombre del sector');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! ingrese el nombre del sector',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else{  
		registrarSector();
  	}
});

function registrarSector(){
	var datos = new FormData($("#frmSectores")[0]);	
	var route = "/sectores"
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
			$("#msj-insert-sector").fadeIn();
		}
	});
}