@extends('layouts.app')

@section('content')		
	{!!Form::open(['id'=>'frmComunidad', 'method'=>'POST'])!!}

		@include('alerts.success')

		<!--div id="msj-error-comunidad" class="alert alert-danger alert-dismissible" role="alert" style="display: none">
			<strong id="msj-comunidad">Comunidad Agregada Correctamente</strong>
		</div>

		<div id="msj-error-observacion" class="alert alert-danger alert-dismissible" role="alert" style="display: none">
			<strong id="msj-observacion">Observacion Agregada Correctamente</strong>
		</div-->

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
		@include('Comunidades.forms.comunidades')	
		{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroComunidad','class'=>'btn btn-primary'], $secure = null)!!}
	{!!Form::close()!!}	
@endsection


