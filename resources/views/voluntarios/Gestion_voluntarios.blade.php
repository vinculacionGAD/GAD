@extends('Layouts.app')

@section('content')
<h2>Ingreso Voluntario</h2>
<div class="panel panel-default">

    <div class="panel-body">
            <div class="col-md-12 registro">
                <div class="col-md-6">
                     
                     {!!Form::open(array('url'=>'','class'=>'frmUser','method'=>'POST'))!!}
                    
                            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                 
                                 
                                {!!Form::label('Voluntario:')!!}
                                {!!Form::text('User',null,['id'=>'User', 'class'=>'form-control','placeholder'=>'Ingrese Voluntario','required'=>''])!!}

                               <div class="form-group tamaño">
                                    <label for="disabledTextInput">Pais</label>
                                    <select id="estadoCivil" name="estadoCivil" onchange='deleteError("estadoCivil")' class="form-control text">
                                        <option>Seleccione Pais</option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Divorciado">Divorciado</option>
                                    </select>
                                </div>

                                 {!!Form::label('Fecha de Inicio:')!!}
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


                                        {!!Form::label('Fecha de Fin:')!!}
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

                                <div class="form-group tamaño">
                                    <label for="disabledTextInput">Organizacion </label>
                                    <select id="estadoCivil" name="estadoCivil" onchange='deleteError("estadoCivil")' class="form-control text">
                                        <option>Seleccione Organizacoion</option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Divorciado">Divorciado</option>
                                    </select>
                                </div>
      

                     {!!Form::close()!!}

                                {!!link_to('#', $title='Guardar', $attributes =['id'=>'btn_Usuario', 'class'=>' margintop10 btn btn-success btn-guardar'], $secure= null)!!}              
                   
                </div>  
               
        </div> <!--fin del div registro -->
     </div>
</div>
@endsection


@section('scripts')
    <script>
     
    </script>


@endsection