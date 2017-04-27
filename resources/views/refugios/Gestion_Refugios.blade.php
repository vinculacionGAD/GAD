@extends('Layouts.app')

@section('content')
<h2>Ingreso Refugios</h2>
<div class="panel panel-default">

    <div class="panel-body">
            <div class="col-md-12 registro">
                <div class="col-md-6">
                     
                     {!!Form::open(array('url'=>'','class'=>'frmProductos','method'=>'POST'))!!}
                    
                            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                 
                                {!!Form::label('Nombre de contacto:')!!}
                                {!!Form::text('refugio',null,['id'=>'reugio', 'class'=>'form-control','placeholder'=>'Ingrese nombre de refugio','required'=>''])!!}

                                  <div class="form-group tamaño">
                                    <label for="disabledTextInput">recursos </label>
                                    <select id="estadoCivil" name="estadoCivil" onchange='deleteError("estadoCivil")' class="form-control text">
                                        <option>Seleccione refugio</option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Divorciado">Divorciado</option>
                                    </select>
                                </div>

                                {!!Form::label('capacidad al maximo:')!!}
                                {!!Form::text('stock',null,['id'=>'stock', 'class'=>'form-control','placeholder'=>'Ingrese maximo','required'=>''])!!}
                                
                                {!!Form::label('precio:')!!}
                                {!!Form::text('precio',null,['id'=>'precio', 'class'=>'form-control','placeholder'=>'Ingrese Precio','required'=>''])!!}

                                {!!Form::label('poblacion:')!!}
                                {!!Form::text('poblacion',null,['id'=>'poblacion', 'class'=>'form-control','placeholder'=>'Ingrese Poblacion','required'=>''])!!}

                                {!!Form::label('estado:')!!}
                                {!!Form::text('estado',null,['id'=>'estado', 'class'=>'form-control','placeholder'=>'Ingrese Estado','required'=>''])!!}

                                {!!Form::label('observacion:')!!}
                                {!!Form::text('observacion',null,['id'=>'observacion', 'class'=>'form-control','placeholder'=>'Ingrese Observacion','required'=>''])!!}

                                 

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