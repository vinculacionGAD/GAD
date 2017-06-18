$('#nombre').blur(function(){
    var nombre = $("#nombre").val();
    if (nombre.indexOf('')== -1){
      $('#nombre').addClass('error');
      $('#nombre').addClass('error_span');
      $('#nombre').html('Ingrese Nombre de la Organización');
    }else{
    $('#nombre').removeClass('error');
    $('#nombre').removeClass('error_span');
    $('#span_mensaje_nombre').html('');
    }    
});

$('#telefono').blur(function(){
    var telefono = $("#telefono").val();
    if (telefono.indexOf('')== -1){
      $('#telefono').addClass('error');
      $('#telefono').addClass('error_span');
      $('#telefono').html('Ingrese Teléfono de la Organización');
    }else{
    $('#telefono').removeClass('error');
    $('#telefono').removeClass('error_span');
    $('#span_mensaje_telefono').html('');
    }    
});

$("#registroOrganizacion").click(function(){
 if($('#nombre').val() == "" && $('#telefono').val() == "" ){
   var animate_in = 'lightSpeedIn',
      animate_out = 'bounceOut';
      new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                   type: 'error',delay: 2500,
                   animate: {animate: true,in_class: animate_in,out_class: animate_out}
      });

      $('#nombre').addClass('error');
      $('#telefono').addClass('error');
                
  }else if($('#nombre').val()==""){
      $('#nombre').addClass('error');
      $('#span_nombre').addClass('error_span');
      $('#span_mensaje_nombre').html('Ingrese el nombre de la organización');
      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
      new PNotify({title: 'Alerta',text: 'Por favor! ingrese el nombre de la organización',
                   type: 'error',delay: 2500,
                   animate: {animate: true,in_class: animate_in,out_class: animate_out}
      });
  }else if($('#telefono').val()==""){
    $('#telefono').addClass('error');
    $('#span_telefono').addClass('error_span');
    $('#span_mensaje_telefono').html('Ingrese el telefono de la organización');
    var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
    new PNotify({title: 'Alerta',text: 'Por favor! ingrese el telefono de la organización',
                 type: 'error',delay: 2500,
                 animate: {animate: true,in_class: animate_in,out_class: animate_out}
    });
  }else{  
    registrarOrganizacion();
  }
});

function registrarOrganizacion(){
	var datos = new FormData($("#frmOrganizaciones")[0]);	
	var route = "/organizaciones"
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
			$("#msj-insert-organizacion").fadeIn();
		}
	});
}