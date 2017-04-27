@extends('Layouts.app')

@section('content')
<h2>Ingreso de Proyectos</h2>
<div class="panel panel-default">

    <div class="panel-body">
            <div class="col-md-12 registro">
                <div class="col-md-6">
                     
                     {!!Form::open(array('url'=>'','class'=>'frmProductos','method'=>'POST'))!!}
                    
                            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                 
                                {!!Form::label('Nombre de Proyecto:')!!}
                                {!!Form::text('producto',null,['id'=>'producto', 'class'=>'form-control','placeholder'=>'Ingrese Nombre del Proyecto','required'=>''])!!}

                                  <div class="form-group tamaño">
                                    <label for="disabledTextInput">Organizacion </label>
                                    <select id="estadoCivil" name="estadoCivil" onchange='deleteError("estadoCivil")' class="form-control text">
                                        <option>Seleccione Organizacion</option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Divorciado">Divorciado</option>
                                    </select>
                                </div>

                                <div class="form-group tamaño">
                                    <label for="disabledTextInput">Programa </label>
                                    <select id="estadoCivil" name="estadoCivil" onchange='deleteError("estadoCivil")' class="form-control text">
                                        <option>Seleccione Programa</option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Divorciado">Divorciado</option>
                                    </select>
                                </div>

                                {!!Form::label('presupuesto:')!!}
                                {!!Form::text('stock',null,['id'=>'stock', 'class'=>'form-control','placeholder'=>'Ingrese Presupuesto','required'=>''])!!}
                                
                                {!!Form::label('Moneda:')!!}
                                {!!Form::text('precio',null,['id'=>'precio', 'class'=>'form-control','placeholder'=>'Ingrese Moneda','required'=>''])!!}

                                
                                 <br>{!!Form::label('Fecha de Inicio:')!!}
                                    <div class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;     width: 51%;">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                     <input type="text" id="fechaNacimiento" placeholder="Ingrese Fecha de Inicio" name="birthdate" value="10/24/1995" style="border: 0px;    width: 64%;" /> <b class="caret"></b>
                                </div>
 
                                        <script type="text/javascript">
                                        $(function() {
                                            $('input[name="birthdate"]').daterangepicker({
                                                singleDatePicker: true,
                                                showDropdowns: true
                                            });
                                        });
                                        </script><br>

                                         <br>{!!Form::label('Fecha de fin:')!!}
                                    <div class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;     width: 51%;">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                     <input type="text" id="fechaNacimiento" name="birthdate" value="10/24/1995" style="border: 0px;    width: 64%;" /> <b class="caret"></b>
                                </div>
 
                                        <script type="text/javascript">
                                        $(function() {
                                            $('input[name="birthdate"]').daterangepicker({
                                                singleDatePicker: true,
                                                showDropdowns: true
                                            });
                                        });
                                        </script><br>

                                {!!Form::label('observacion:')!!}
                                {!!Form::text('descripcion',null,['id'=>'descripcion', 'class'=>'form-control','placeholder'=>'Ingrese Descripcion de Proyecto','required'=>''])!!}



                     {!!Form::close()!!}

                                {!!link_to('#', $title='Guardar', $attributes =['id'=>'btn_GuardarProductos', 'class'=>'btn btn-success btn-guardar'], $secure= null)!!}              
                   
                </div>  
               
        </div> <!--fin del div registro -->
     </div>
</div>
@endsection


@section('scripts')
    <script>
     
    </script>


@endsection