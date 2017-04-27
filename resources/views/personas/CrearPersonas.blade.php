@extends('Layouts.app')

@section('content')
<h2>Ingreso Personas</h2>
<div class="panel panel-default">

    <div class="panel-body">
            <div class="col-md-12 registro">
                <div class="col-md-6">
                     
                     {!!Form::open(['id'=>'FormClientes'])!!}
                    
                            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                 
                                {!!Form::label('Cedula:')!!}
                                {!!Form::text('cedula',null,['id'=>'cedula', 'class'=>'form-control','placeholder'=>'Ingrese el numero de cedula','required'=>'','onblur'=>'deleteError("cedula")'])!!}
                                 <span id="span_cedula"></span>
                                <span id="span_mensaje" style="display: block;color: red;"></span>
                                {!!Form::label('Apellido Paterno:')!!}
                                {!!Form::text('apellidoPaterno',null,['id'=>'apellidoPaterno', 'class'=>'form-control','placeholder'=>'Ingrese el apellido Paterno del Empleado','required'=>'','onblur'=>'deleteError("apellidoPaterno")'])!!}

                                {!!Form::label('Apellido Materno:')!!}
                                {!!Form::text('apellidoMaterno',null,['id'=>'apellidoMaterno', 'class'=>'form-control','placeholder'=>'Ingrese el apellido Materno del Empleado','required'=>'','onblur'=>'deleteError("apellidoMaterno")'])!!}

                                {!!Form::label('Nombres:')!!}
                                {!!Form::text('nombre',null,['id'=>'nombre', 'class'=>'form-control','placeholder'=>'Ingrese el nombre de Empleado','required'=>'','onblur'=>'deleteError("nombre")'])!!}

                                {!!Form::label('Genero:')!!}<br>
                                Masculino:
                                <input type="radio" class="flat" name="genero" id="genderM" value="Masculino" checked="" required /> Femenino:
                                <input type="radio" class="flat" name="genero" id="genderF" value="Femenino" />
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                                 <div class="form-group tamaño">
                                    <label for="disabledTextInput">Estado Civil</label>
                                    <select id="estadoCivil" name="estadoCivil" onchange='deleteError("estadoCivil")' class="form-control text">
                                        <option>Seleccione Estado Civil</option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Divorciado">Divorciado</option>
                                    </select>
                                </div>
                                    
                                {!!Form::label('Direccion:')!!}
                                {!!Form::text('direccion',null,['id'=>'direccion', 'class'=>'form-control','placeholder'=>'Ingrese la direccion','required'=>'','onblur'=>'deleteError("direccion")'])!!}
                                
                                <br>{!!Form::label('Fecha de Nacimiento:')!!}
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

                                        <label for="Correo" class="marginTop">Correo</label>
                                {!!Form::text('correo',null,['id'=>'correo', 'class'=>'form-control','placeholder'=>'Ingrese el Correo','required'=>'','onblur'=>'deleteError("correo")'])!!}
                                 <span id="span_correo"></span>
                                <span id="span_mensaje_correo" style="display: block;color: red;"></span>

                                {!!Form::label('Telefono:')!!}
                                {!!Form::text('telefono',null,['id'=>'telefono', 'class'=>'form-control','placeholder'=>'Ingrese el telefono','required'=>'','onblur'=>'deleteError("telefono")'])!!}

                     {!!Form::close()!!}

                                {!!link_to('#', $title='Guardar', $attributes =['id'=>'btn_GuardarClientes', 'class'=>'moverBtn_G_personas btn btn-success btn-guardar'], $secure= null)!!}                
                   
                </div>  
               
        </div> <!--fin del div registro -->
     </div>
</div>
@endsection


@section('scripts')
    <script>
     
    </script>


@endsection