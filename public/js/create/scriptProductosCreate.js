$('#producto').blur(function(){
	var producto = $("#producto").val();
    if (producto.indexOf('') == -1) {
  		$('#producto').addClass('error');
      	$('#producto').addClass('error_span');
      	$('#producto').html('Escriba el nombre del producto');
    } else {
    	$('#producto').removeClass('error');
    	$('#producto').removeClass('error_span');
    	$('#span_mensaje_producto').html('');
    }    
}); 

$('#tipo_producto_id').blur(function(){
	var tipo_producto_id = $("#tipo_producto_id").val();
    if (tipo_producto_id.indexOf('') == -1) {
  		$('#tipo_producto_id').addClass('error');
      	$('#tipo_producto_id').addClass('error_span');
      	$('#tipo_producto_id').html('Escoja el tipo de producto');
    } else {
    	$('#tipo_producto_id').removeClass('error');
    	$('#tipo_producto_id').removeClass('error_span');
    	$('#span_mensaje_tipo_producto_id').html('');
    }    
}); 

$("#registroProducto").click(function(){
	if($('#producto').val() == "" 
 		&& $('#tipo_producto_id').val() == ""){
		
		var animate_in = 'lightSpeedIn',
        animate_out = 'bounceOut';
        	new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios o no se han seleccionado',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        	});

            $('#producto').addClass('error');
            $('#tipo_producto_id').addClass('error');
                
  	}else if($('#producto').val() == ""){
        $('#producto').addClass('error');
        $('#span_producto').addClass('error_span');
        $('#span_mensaje_producto').html('Ingrese el nombre del producto');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! ingrese el nombre del producto',
	             type: 'error',delay: 2500,
	             animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else if($('#tipo_producto_id').val() == ""){
        $('#tipo_producto_id').addClass('error');
        $('#span_tipo_producto_id').addClass('error_span');
        $('#span_mensaje_tipo_producto_id').html('Escoja el tipo de producto');
        var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
        new PNotify({title: 'Alerta',text: 'Por favor! escoja el tipo de producto',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
        });

    }else{  
		registrarProducto();
  	}
});

function registrarProducto(){
	var datos = new FormData($("#frmProductos")[0]);
	var route = "/productos"
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
			$("#msj-insert-producto").fadeIn();
		}
	});
}