@extends('Layouts.app')

@section('content')
<h2>Ingreso de Usuarios</h2>
<div class="panel panel-default">

    <div class="panel-body">
            <div class="col-md-12 registro">
                <div class="col-md-6">
                     
                     {!!Form::open(array('url'=>'','class'=>'frmUser','method'=>'POST'))!!}
                    
                            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                 
                                 <div class="form-group">
                                    <label for="disabledTextInput">Tipo Usuarios</label>
                                    <select id="idTipoUsuario" name="tipoUsuario" class="form-control text">
                                    <option>Seleccione...</option>

                                    </select>
                                </div>

                                {!!Form::label('Usuarios:')!!}
                                {!!Form::text('User',null,['id'=>'User', 'class'=>'form-control','placeholder'=>'Ingrese el nombre de Usuario','required'=>''])!!}

                                {!!Form::label('Contraseña:')!!}
                                {!!Form::text('password',null,['id'=>'password', 'class'=>'form-control','placeholder'=>'Ingrese la contrasena de Usuario','required'=>''])!!}


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