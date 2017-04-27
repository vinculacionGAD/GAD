@extends('Layouts.app')

@section('content')
<h2>Ingreso de Sectores</h2>
<div class="panel panel-default">

    <div class="panel-body">
            <div class="col-md-12 registro">
                <div class="col-md-6">
                     
                     {!!Form::open(array('url'=>'','class'=>'frmProductos','method'=>'POST'))!!}
                    
                            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                 
                                {!!Form::label('Nombre de recurso:')!!}
                                {!!Form::text('producto',null,['id'=>'producto', 'class'=>'form-control','placeholder'=>'Ingrese el nombre del recurso','required'=>''])!!}

                                  <div class="form-group tamaño">
                                    <label for="disabledTextInput">Sellecione Comunidades </label>
                                    <select id="estadoCivil" name="estadoCivil" onchange='deleteError("estadoCivil")' class="form-control text">
                                        <option>Seleccione Comunidades</option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Divorciado">Divorciado</option>
                                    </select>
                                </div>

                                {!!Form::label('Sector:')!!}
                                {!!Form::text('Sector',null,['id'=>'sector', 'class'=>'form-control','placeholder'=>'Ingrese el Sector','required'=>''])!!}
                                
                                {!!Form::label('Abreviatura:')!!}
                                {!!Form::text('Abreviatura',null,['id'=>'abreviatura', 'class'=>'form-control','placeholder'=>'Ingrese Abreviatura','required'=>''])!!}

                                {!!Form::label('Ubicacion:')!!}
                                {!!Form::text('Ubicacion',null,['id'=>'ubicacion', 'class'=>'form-control','placeholder'=>'Ingrese Ubicacion','required'=>''])!!}

                                {!!Form::label('Observacion:')!!}
                                {!!Form::text('Observacion',null,['id'=>'observacion', 'class'=>'form-control','placeholder'=>'Ingrese Observacion del sector','required'=>''])!!}

                               
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