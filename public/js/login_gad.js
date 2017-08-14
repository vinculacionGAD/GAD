
 $(document).ready(function(){
	$('#usuario').focus();
	
});

 $('#Bton_Iniciar').click(function(){
    login();
  });
 
  $("#clave").keypress(function(tecla) {
    if (tecla.which == 13) {
        login();
    }
});

 function login(){
     loader_login('on');
     debugger
      var usuario   = $('#usuario').val();
      var password  = $('#clave').val();
      var token     = $('#token').val();
      if(usuario=="" && password==""){
        alert("usuario y contraseña esta vacio");
         loader_login('off');        
      }else{
          //loader_login('on');
        $.ajax({
            url:'/logeo',
            type:'POST',
            headers :{'X-CSRF-TOKEN': token},
            dataType:'json',
            data:{usuario:usuario,password:password},
            success:function(response){ 
                debugger
                loader_login('off');
                   if(response.sms=="login"){
                 //loader_login('off');
                  alert("Bienvenido");
                  redirect('/app');
                  //window.location="/home";
                  }else{
                  //loader_login('off');
                  alert("Usuario Incorrectos");
                 }
              }
          });
      }
    }
  function redirect(url){
    window.location=url;
  }
  function loader_login(v){
    if(v== 'on'){
      $('#login_from').css({
        opacity: 0.4
      });
        $('#lod').show();
    }else{
      $('#login_from').css({
        opacity: 1
      });
      $('#lod').hide();
    }
  }