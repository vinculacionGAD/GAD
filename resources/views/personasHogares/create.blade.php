@extends('layouts.app')
@section('content')
	{!!Form::open(['class'=>'form-horizontal','id'=>'frmRegistraFamiliaHogares','method'=>'POST'])!!}

		<div id="msj-insert-miembrofamilia" class="alert alert-success alert-dismissible" role="alert" style="display: none">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Miembro de Familia Agregado Correctamente</strong>
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
		
		@include('personasHogares.forms.personasHogares')			
		@include('salud.forms.salud')	

		<div class="form-group">
			<div class="col-md-6 col-xs-12">
				{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroPersonaHogar','class'=>'btn btn-primary'], $secure = null)!!}
			</div>
		</div>
		
	{!!Form::close()!!}		
@endsection