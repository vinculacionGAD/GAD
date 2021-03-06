<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GAD MUNICIPAL SUCRE</title>

    <!-- csss de swal -->
    {!!Html::style('css/sweetalert.css')!!}

    <!-- datatable -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

    <!-- Bootstrap -->
    {!!Html::style('plugins/bootstrap/dist/css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
    {!!Html::style('plugins/font-awesome/css/font-awesome.min.css')!!}
    <!-- NProgress -->
    {!!Html::style('plugins/nprogress/nprogress.css')!!}
    <!-- Custom Theme Style -->
    {!!Html::style('css/custom.min.css')!!}
    {!!Html::style('css/sicgom.css')!!}

    <!-- notificacion -->
    {!!Html::style('css/pnotify.css')!!}
    <!-- notificacion -->
    {!!Html::style('css/pnotify.brighttheme.css')!!}

    <!-- SELECT2JS -->
    {!!Html::style('plugins/select2/dist/css/select2.min.css')!!}

 
    @yield('css')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <!--div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>SUCRE</span></a>
            </div-->

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="{{asset('img/escudo1.png')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>Gestión de Riesgos</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

           @include('layouts.menu');

            <!-- /menu footer buttons -->
            <!--div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div-->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    GAD
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!--li><a href="javascript:;"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Configuración</span>
                      </a>
                    </li-->
                    <li><a href="/resources/ManualUsuario.pdf" target="blank_">Manual de Usuario</a></li>
                    <li><a href="/logout"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                  </ul>
                </li>

                <!--li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li-->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div  id ="content-sgdn" class="right_col" role="main">
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gestión de Riesgo <a href="http://utm.edu.ec" target="_black">GADM SUCRE</a> <a href="http://fci.utm.edu.ec" target="_black"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    
    <!-- jQuery -->
    {!!Html::script('plugins/jquery/dist/jquery.min.js')!!}
    <!-- Bootstrap -->
    {!!Html::script('plugins/bootstrap/dist/js/bootstrap.min.js')!!}
    <!-- FastClick -->
    {!!Html::script('plugins/fastclick/lib/fastclick.js')!!}
    <!-- NProgress -->
    {!!Html::script('plugins/nprogress/nprogress.js')!!}
    <!-- Chart.js -->
    {!!Html::script('plugins/Chart.js/dist/Chart.min.js')!!}
    <!-- jQuery Sparklines -->
    {!!Html::script('plugins/jquery-sparkline/dist/jquery.sparkline.min.js')!!}
    <!-- Flot -->
    {!!Html::script('plugins/Flot/jquery.flot.js')!!}
    {!!Html::script('plugins/Flot/jquery.flot.pie.js')!!}
    {!!Html::script('plugins/Flot/jquery.flot.time.js')!!}
    {!!Html::script('plugins/Flot/jquery.flot.stack.js')!!}
    {!!Html::script('plugins/Flot/jquery.flot.resize.js')!!}

    <!-- Flot plugins -->
    {!!Html::script('plugins/flot.orderbars/js/jquery.flot.orderBars.js')!!}
    {!!Html::script('plugins/flot-spline/js/jquery.flot.spline.min.js')!!}
    {!!Html::script('plugins/flot.curvedlines/curvedLines.js')!!}

    <!-- DateJS -->
    {!!Html::script('plugins/DateJS/build/date.js')!!}

    <!-- bootstrap-daterangepicker -->
    {!!Html::script('plugins/moment/moment.min.js')!!}
    {!!Html::script('plugins/datepicker/daterangepicker.js')!!}

    <!-- Custom Theme Scripts -->
    {!!Html::script('js/custom.min.js')!!}
    {!!Html::script('js/sicgom.js')!!}

    <!-- Other Scripts -->

    {!!Html::script('js/sweetalert.min.js')!!}


    <!-- datatable -->
   <script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

    {!!Html::script('js/create/scriptAlmacenesCreate.js')!!}
    {!!Html::script('js/create/scriptBomberosCreate.js')!!}
    {!!Html::script('js/create/scriptComunidadesCreate.js')!!}
    {!!Html::script('js/create/scriptCruzRojaCreate.js')!!}
    {!!Html::script('js/create/scriptDepartamentosCreate.js')!!}
    {!!Html::script('js/create/scriptFamiliasCreate.js')!!}
    {!!Html::script('js/create/scriptHospitalesCreate.js')!!}
    {!!Html::script('js/create/scriptMarinaCreate.js')!!}
    {!!Html::script('js/create/scriptOrganizacionesCreate.js')!!}
    {!!Html::script('js/create/scriptPerdidasCreate.js')!!}
    {!!Html::script('js/create/scriptPersonasHogarCreate.js')!!}
    {!!Html::script('js/create/scriptPersonalesCreate.js')!!}
    {!!Html::script('js/create/scriptPersonasCreate.js')!!}
    {!!Html::script('js/create/scriptPoliciasCreate.js')!!}
    {!!Html::script('js/create/scriptProductosCreate.js')!!}
    {!!Html::script('js/create/scriptProgramasCreate.js')!!}
    {!!Html::script('js/create/scriptProveedoresCreate.js')!!}
    {!!Html::script('js/create/scriptProyectosCreate.js')!!}
    {!!Html::script('js/create/scriptPuntosEncuentroCreate.js')!!}
    {!!Html::script('js/create/scriptRefugiosCreate.js')!!}
    {!!Html::script('js/create/scriptSectoresCreate.js')!!}
    {!!Html::script('js/create/scriptViviendasCreate.js')!!}
    {!!Html::script('js/create/scriptVoluntariosCreate.js')!!}
    {!!Html::script('js/funciones.js')!!}
      

  

    <!-- notificacion -->
    {!!Html::script('js/pnotify.js')!!}
    {!!Html::script('js/pnotify.desktop.js')!!}

    <!--select2 -->
    {!!Html::script('plugins/select2/dist/js/select2.full.min.js')!!}

    @yield('js')
    
    @section('scripts')

    @show
  
  
  </body>
</html>