$('#nombre_recurso').blur(function(){
	var nombre_recurso = $("#nombre_recurso").val();
    if (nombre_recurso.indexOf('') == -1) {
  		$('#nombre_recurso').addClass('error');
      	$('#nombre_recurso').addClass('error_span');
      	$('#nombre_recurso').html('Ingrese Nombre del Almacén');
    } else {
    	$('#nombre_recurso').removeClass('error');
    	$('#nombre_recurso').removeClass('error_span');
    	$('#span_mensaje_nombre_recurso').html('');
    }    
}); 

$('#direccion').blur(function(){
	var direccion = $("#direccion").val();
    if (direccion.indexOf('') == -1) {
  		$('#direccion').addClass('error');
      	$('#direccion').addClass('error_span');
      	$('#direccion').html('Ingrese la direción');
    } else {
    	$('#direccion').removeClass('error');
    	$('#direccion').removeClass('error_span');
    	$('#span_mensaje_direccion').html('');
    }    
}); 

$('#telefono').blur(function(){
	var telefono = $("#telefono").val();
    if (telefono.indexOf('') == -1) {
  		$('#telefono').addClass('error');
      	$('#telefono').addClass('error_span');
      	$('#telefono').html('Ingrese un número de teléfono');
    } else {
    	$('#telefono').removeClass('error');
    	$('#telefono').removeClass('error_span');
    	$('#span_mensaje_telefono').html('');
    }    
}); 

$('#tipo_instalacion_id').blur(function(){
	var tipo_instalacion_id = $("#tipo_instalacion_id").val();
    if (tipo_instalacion_id.indexOf('') == -1) {
  		$('#tipo_instalacion_id').addClass('error');
      	$('#tipo_instalacion_id').addClass('error_span');
      	$('#tipo_instalacion_id').html('Escoja un tipo de instalación');
    } else {
    	$('#tipo_instalacion_id').removeClass('error');
    	$('#tipo_instalacion_id').removeClass('error_span');
    	$('#span_mensaje_tipo_instalacion_id').html('');
    }    
}); 

$("#registroCruzRoja").click(function(){
	if($('#nombre_recurso').val() == "" 
 		&& $('#direccion').val() == "" 
 		&& $('#telefono').val() == "" 
 		&& $('#tipo_instalacion_id').val() == ""){
		
		var animate_in = 'lightSpeedIn',
        animate_out = 'bounceOut';
        	new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios o no se han seleccionado',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        	});

            $('#nombre_recurso').addClass('error');
            $('#direccion').addClass('error');
            $('#telefono').addClass('error');
            $('#tipo_instalacion_id').addClass('error');
                
  	}else if($('#nombre_recurso').val() == ""){
        $('#nombre_recurso').addClass('error');
        $('#span_nombre_recurso').addClass('error_span');
        $('#span_mensaje_nombre_recurso').html('Ingrese el nombre del almacén');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! ingrese el nombre del almacén',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#direccion').val() == ""){
    	$('#direccion').addClass('error');
        $('#span_direccion').addClass('error_span');
        $('#span_mensaje_direccion').html('Ingrese la dirección del almacén');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! ingrese la dirección del almacén',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#telefono').val() == ""){
        $('#telefono').addClass('error');
        $('#span_telefono').addClass('error_span');
        $('#span_mensaje_telefono').html('Ingrese el telefono del almacén');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! ingrese el telefono del almacén',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#tipo_instalacion_id').val() == ""){
        $('#tipo_instalacion_id').addClass('error');
        $('#span_tipo_instalacion_id').addClass('error_span');
        $('#span_mensaje_tipo_instalacion_id').html('Escoja el tipo de instalación');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! escoja el tipo de instalación',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else{  
		registrarCruzRoja();
  	}
});

function registrarCruzRoja(){
  var datos = new FormData($("#frmCruzRoja")[0]);
  var route = "/cruzRoja"
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
      $("#msj-insert-cruz-roja").fadeIn();
    }
  });
}