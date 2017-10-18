<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GAD MUNICIPAL SUCRE</title>

    <!-- Bootstrap -->
    {!!Html::style('plugins/bootstrap/dist/css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
    {!!Html::style('plugins/font-awesome/css/font-awesome.min.css')!!}
    <!-- NProgress -->
    {!!Html::style('plugins/nprogress/nprogress.css')!!}
    <!-- Custom Theme Style -->
    {!!Html::style('css/custom.min.css')!!}
    <!-- Estilos SICGOM -->
    {!!Html::style('css/sicgom.css')!!}


  </head>

  <body class="login">
  <div class="figure">
    <img class="logo-escudo" src="{{asset('img/escudo1.png')}}">
  </div>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div id="lod" style="display:none"> 
          <img src="{{asset('img/load.gif')}}" alt="" style="position: absolute;margin-left: 640px;z-index: 1;margin-top: 53px;width: 80px;">
        <h4 style="position: absolute;margin-left: 640px;z-index: 1;margin-top: 136px;">Cargando...
                </h4>
    </div>
     <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
      <div class="login_wrapper">
          <div>
          <section class="login_content">
              <h1>GAD MUNICIPAL SUCRE</h1>
              <div class="margin_top_10px">
                <input type="text" id="usuario" class="form-control" placeholder="Usuario" required="" />
              </div>
              <div class="margin_top_10px">
                <input type="password" id="clave" class="form-control" placeholder="Clave" />
              </div>
              <div class="margin_top_10px">
                <button class="btn btn btn-dark form-control" id="Bton_Iniciar" type="button">Iniciar Sessión</button>

                <!--a class="reset_pass" href="#">Olvido su clave?</a-->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <!--p class="change_link">Nuevo usuario?
                  <a href="#signup" class="to_register"> Crear Cuenta </a>
                </p-->

                <div class="clearfix"></div>
                <br />

                <div>
                  <!--h4>UNIVERSIDAD TÉCNICA DE MANABÍ FACULTAD DE CIENCIAS INFORMÁTICAS</h4-->
                  <h4>©2017. GAD Municipal del Cantón Sucre</h4>
                </div>
              </div>
          </section>
        </div>
      </div>
    </div>
  </body>
    {!!Html::script('plugins/jquery/dist/jquery-3.2.1.js')!!}
    {!!Html::script('js/login_gad.js')!!}

</html>