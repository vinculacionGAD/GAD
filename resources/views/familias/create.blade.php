
@extends('layouts.app')
@section('content')
	{!!Form::open(['class'=>'form-horizontal'])!!}

		@include('alerts.success')

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
		
		@include('familias.forms.familias')			
		@include('salud.forms.salud')	
		@include('viviendas.forms.viviendasPersonaHogar')	

		<div class="form-group">
			<div class="col-md-6 col-xs-12">
				{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroFamilia','class'=>'btn btn-primary'], $secure = null)!!}
			</div>
		</div>
		
	{!!Form::close()!!}		
@endsection