$(document).ready(function(){
      $('#tablee').DataTable();
    });
/*Validaci[on del Correo*/
        $('#usuario').blur(function(){
            var correo = $("#usuario").val();
            
            if(correo.indexOf('@') == -1 && correo.indexOf('.com') == -1 ){
                $('#usuario').addClass('error');
                $('#span_mensaje_usuario').html('El correo ingresado es invalido');
            }else if(correo.indexOf('@') == -1 ){
                $('#usuario').addClass('error');
                $('#span_mensaje_usuario').html('El correo ingresado le falta @');
            }else if(correo.indexOf('.com') == -1 ){
                $('#usuario').addClass('error');
                $('#span_mensaje_usuario').html('El correo ingresado debe terminar en .com');
            }else{
                $('#usuario').removeClass('error');
                $('#span_mensaje_usuario').html('');

            }
        }); // fin
        

/*Validaci[on del campo nombre*/
        $('#nombre').blur(function(){
            var nombre = $("#nombre").val();
            if (nombre.indexOf('')== -1){
              $('#nombre').addClass('error');
              $('#span_mensaje_nombre').html('Ingrese el nombre ');
            }else{
            $('#nombre').removeClass('error');
            $('#span_mensaje_nombre').html('');
            }
            
        }); // fin

 /*Validaci[on del campo password*/
        $('#password').blur(function(){
            var password = $("#password").val();
            if (password.indexOf('')== -1){
              $('#password').addClass('error');
              $('#span_mensaje_password').html('Ingrese el password ');
            }else{
            $('#password').removeClass('error');
            $('#span_mensaje_password').html('');
            }
            
        }); // fin

     /*Validaci[on del campo tipoUsuario
        $('#tipoUsuario').blur(function(){
            var tipoUsuario = $("#tipoUsuario").val();
            if (tipoUsuario.indexOf('Seleccione Tipo Usuario')== 1){
              $('#tipoUsuario').addClass('error');
              $('#span_mensaje_tipoUsuario').html('Ingrese el tipo de Usuario ');
            }else{
            $('#tipoUsuario').removeClass('error');
            $('#span_mensaje_tipoUsuario').html('');
            }
            
        }); // fin*/


//FUNCION REGISTRAR USUARIOS
$("#btn_IngresarUsuarios").click(function(){
 if($('#nombre').val()=="" && $('#usuario').val()=="" && $('#password').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#nombre').addClass('error');
                $('#usuario').addClass('error');
                $('#password').addClass('error');

          }else if($('#nombre').val()==""){
                $('#nombre').addClass('error');
                $('#span_nombre').addClass('error_span');
                $('#span_mensaje_nombre').html('Ingrese Nombre de Usuario');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Nombre',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else if($('#usuario').val()==""){
                      $('#tipoUsuario').addClass('error');
                      $('#span_usuario').addClass('error_span');
                      $('#span_mensaje_usuario').html('Ingrese email');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! ingrese un tipo de usuario',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
             }else if($('#password').val()==""){
                      $('#password').addClass('error');
                      $('#span_password').addClass('error_span');
                      $('#span_mensaje_password').html('Ingrese Contrasena');
                      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                      new PNotify({title: 'Alerta',text: 'Por favor! ingrese Contrasena',
                      type: 'error',delay: 2500,
                      animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
          }else{	
    registrar_usuario();
  }
});



// funcion para registar a un usuario
function registrar_usuario(){
    
	  var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresarUsuarios")[0]);
    $.ajax({
    url:"/usuarios",
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
         //swal("Efood!", "El usuario se ha registro correctamente!", "success");
        swal("Usuario Registrado Correctamente..!!", "", "success");
        document.getElementById("frmIngresarUsuarios").reset();  
        $("#myModal_IngresarUsuario").modal("hide");
       }
     }
	});
}
//

 $(document).ready(function() {
            $("#btn_ActualizarUsuarios").click(function() {
            Actualizar_Usuarios();
            });
            });	

    function cargar_datos(id){
    var route="/app/usuario/" +id+"/edit";	
    $.get(route,function(res){
    //	alert(res.tipoUsuario);
      $("#IdUsuario").val(res.id)
      $("#tipoUsuario_A").val(res.tipo_usuario);     
      $("#nombre_A").val(res.nombre);     
      $("#user_A").val(res.email);
      $("#password_A").val(res.password);

      });
    }

     function cargar_datosMO(id){
    var route="/app/usuario/" +id+"/edit";  
    $.get(route,function(res){
    //  alert(res.tipoUsuario);
      $("#id_user_pass").val(res.id)
      $("#user_C").val(res.email);
      });
    }

   
  function Actualizar_Usuarios(){

  var id =$("#IdUsuario").val();
  var TipoUsuario =$("#tipoUsuario_A").val();
  var nombre =$("#nombre_A").val();
  var Usuario =$("#user_A").val();
  var password =$("#password_A").val();
  var route  ="/app/usuario/"+id+"";
  var token  =$("#token").val();
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{TipoUsuario:TipoUsuario,nombre:nombre,user:Usuario,password:password},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarUsuarios').modal('hide');
            alert('Actualizacion correcta');
           $("#datatable").load('/lista_usuarios');
            
          }else{
            alert('no se pudo');
               }
          
        }
  });
}

 $(document).ready(function() {
            $("#btn_CambiarContraseñaUsuarios").click(function() {
            actualizarContrseñaUsuarios();
            });
            }); 

// funcion para cambiar la contrase na de usuarios

function actualizarContrseñaUsuarios(){
  var id =$("#id_user_pass").val();
  var nuevaContrasena=$("#password_ConfirmarNueva").val(); 
  var route  ="/usuario_contrasena";
  var token  =$("#token").val();
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType:'json',
        data    :{password:nuevaContrasena,id_usuario:id},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarContraseñaUsuarios').modal('hide');
            alert('Actualizacion correcta');
           $("#datatable").load('/lista_usuarios');
            }else{
            alert('no se pudo');
               }
          
        }
  });
}


function EliminarUsuarios(id){

    swal({ 
		title: "¿Deseas Elimar el Usuario?",
		text: "",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "¡Eliminar!",
		cancelButtonText: "No,Cancelar", 
		closeOnConfirm: false,
		closeOnCancel: false },

		function(isConfirm){ 
		if (isConfirm){
			var route  ="/app/usuario/"+id+"";
		    var token  =$("#token").val();
		    $.ajax({
			    url: route,
			    headers :{'X-CSRF-TOKEN': token},
			    type: 'delete',
			    dataType:'json',
			        success:function(res){
			         if(res.sms=='ok'){
						swal("¡Hecho!","Usuario Eliminado Correctamente","success"); 
			            $("#datatable").load("/lista_usuarios");
			          }          
			        }
		 	     });
        }else { 
			swal("¡Error !","No se pudo Eliminar el Usuario ","error"); 
		} 
	});
}
$("#btn_CambiarContraseñaUsuarios").click(function(){
  var clave_nueva,clave_confir;

  clave_nueva=$("#password_ConfirmarNueva").val();
  clave_confir=$("#password_Nueva").val();

  if(clave_nueva==clave_confir){
    alert("ok");
  }else{
    alert("las contraseñas no se parecen");
  }
});