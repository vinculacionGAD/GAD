@extends('layouts.app')

@section('content')		
	{!!Form::open(['class'=>'form-horizontal', 'id'=>'frmComunidad', 'method'=>'POST'])!!}

		<div id="msj-insert-comunidad" class="alert alert-success alert-dismissible" role="alert" style="display: none">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Comunidad Agregada Correctamente</strong>
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 

		@include('comunidades.forms.comunidades')
			
		<div class="form-group">
			<div class="col-md-6 col-xs-12">
				{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroComunidad','class'=>'btn btn-primary'], $secure = null)!!}
			</div>
		</div>	
	{!!Form::close()!!}	
@endsection


