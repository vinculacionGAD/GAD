@extends('Layouts.app')

@section('content')
<h2>Ingreso de Recursos</h2>
<div class="panel panel-default">

    <div class="panel-body">
            <div class="col-md-12 registro">
                <div class="col-md-6">
                     
                     {!!Form::open(array('url'=>'','class'=>'frmProductos','method'=>'POST'))!!}
                    
                            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                 
                                {!!Form::label('Nombre de de recurso:')!!}
                                {!!Form::text('recurso',null,['id'=>'Recusroso', 'class'=>'form-control','placeholder'=>'Ingrese nombre de recurso','required'=>''])!!}

                                  <div class="form-group tamaño">
                                    <label for="disabledTextInput">Tipo de Instalacion </label>
                                    <select id="estadoCivil" name="estadoCivil" onchange='deleteError("estadoCivil")' class="form-control text">
                                        <option>Seleccione Tipo de Instalacion</option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Divorciado">Divorciado</option>
                                    </select>
                                </div>

                                {!!Form::label('direccion:')!!}
                                {!!Form::text('direccion',null,['id'=>'direccion', 'class'=>'form-control','placeholder'=>'Ingrese Direccion','required'=>''])!!}
                                
                                {!!Form::label('Telefono:')!!}
                                {!!Form::text('Telefono',null,['id'=>'Telefono', 'class'=>'form-control','placeholder'=>'Ingrese Telefono','required'=>''])!!}

                                {!!Form::label('Latitud:')!!}
                                {!!Form::text('Latitud',null,['id'=>'Latitud', 'class'=>'form-control','placeholder'=>'Ingrese Latitud','required'=>''])!!}

                                {!!Form::label('Longitud:')!!}
                                {!!Form::text('Longitud',null,['id'=>'Longitud', 'class'=>'form-control','placeholder'=>'Ingrese Longitud','required'=>''])!!}

                                {!!Form::label('Correo:')!!}
                                {!!Form::text('Correo',null,['id'=>'Correo', 'class'=>'form-control','placeholder'=>'Ingrese Correo','required'=>''])!!}

                                 

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