<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reporte de Marina</title>
<style>
 
 .col-md-12 {
    width: 100%;
} 

.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    background-color: #ECF0F5;
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
    margin-bottom: 5px;
}

table {
    background-color: transparent;
}

 .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #f4f4f4;
}


.badge {
    display: inline-block;
    min-width: 2px;
    padding: 3px 7px;
    font-size: 10px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    align:center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px;
    width: 100px;
}

.bg-red {
    background-color: #2EFEF7 !important;
   
}

.bg-blue{
background-color: #CEF6F5 !important;
}

.id{
width: 2px;
align: center;
}
.centrar{
  text-align:center;
}


</style>
    
</head>
<body>

<div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title" align="center">SISTEMA DE GESTION DE DESASTRES NATURALES</h3><br>
                  <h3 class="box-title" align="center">REPORTE DE MARINOS</h3>
                  <br><h3 class="box-title">FECHA: <?=  $date; ?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="">
                  <thead>
                     <tr class="bg-red">
                      <th style="width: 40px">NOMBRE</th>
                      <th style="width: 20px">DIRECCION</th>
                      <th style="width: 20px">TELEFONO</th>
                      <th style="width: 20px">TOTAL DE BOTES </th>
                      <th style="width: 20px">TOTAL DE PERSONAS</th>
                    </tr>
                  </thead>
                    <tbody>
                  <?php foreach($data as $marinas){ ?>
                    <tr class="bg-blue">
                      <td style="" align="center"><?= $marinas->nombre_recurso; ?></td>
                      <td style= "" align="center"><span class="badge bg-red"><?= $marinas->direccion ?></span></td>
                      <td style="" align="center"><?= $marinas->telefono; ?></td>
                      <td style= "" align="center"><span class="badge bg-red"><?= $marinas->n_botes ?></span></td>
                      <td style="" align="center"><?= $marinas->n_personas; ?></td>
                    </tr>                  
                    <?php  } ?>
                    
                  </tbody>

                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              </div><!-- /.box -->

              
            </div>


  
</body>
</html>


