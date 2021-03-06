<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reporte</title>
<style>
 
 .col-md-12 {
    width: 100%;
} 

.foto{
  background-image: url("/img/escudo5.png");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center center;
  margin-top: -140px;
  background-size: 150px;
}

.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 0px solid white;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    background-color: white;
}

.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}

.box-header.with-border {
    border-bottom: 1px solid #f4f4f4;
}


.box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
}

.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;

}


.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #fff;
}


.table-bordered {
    border: 1px solid #f4f4f4;
}


.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
}

.table {
    background-color: transparent;
}

 .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #f4f4f4;
}


.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px;
}
.moverTotales{

  margin-left:80%;
}

.bg-red {
    background-color: #dd4b39 !important;
}
.mover-titulo{
  margin-top: 220px;
}

.mover-foto{

  margin-right: 60px;
}



</style>
    
</head>
<body>

<div class="col-md-12">
              <div class="box foto mover-foto">
                <div class="box-header with-border mover-titulo">
                  <h3 class="box-title mover-titulo" align="center" >GAD MUNICIPAL DEL CANTON SUCRE</h3><br>
                  <h3 class="box-title mover-titulo" align="center" >SISTEMA DE GESTION DE DESASTRES NATURALES</h3><br>
                  <h3 class="box-title" align="center">REPORTE DE PROGRAMAS</h3>
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                                         
                  <table align="center" class="" border="1">
                    <thead>
                    <tr>
                          <th style="width: 300%;">PROGRAMA</th>
                          <th style="width: 100%;">PROYECTO</th>
                          <th style="width: 80px;">INICIO</th>
                          <th style="width: 100%;">FIN    </th>
                          <th style="width: 100%;">MONTO</th>
                          <th style="width: 100%;">MONEDA</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $PROYECTOS)
                        <tr>
                          <td style="width: 25PX;">{{$PROYECTOS->programa}}</td>
                          <td style="width: 25PX;">{{$PROYECTOS->proyecto}}</td>
                          <td>{{$PROYECTOS->fecha_inicio}}</td>
                          <td>{{$PROYECTOS->fecha_fin}}</td>
                          <td>{{$PROYECTOS->presupuesto}}</td>
                          <td>{{$PROYECTOS->moneda}}</td>
                        </tr>
                       @endforeach


                    </tbody>
                  </table>
                
                

                </div><!-- /.box-body -->
                               
              </div><!-- /.box -->

              
            </div>
</body>
</html>


