@extends('layouts.app')
@section('content')
	{!!Form::open(['class'=>'form-horizontal'])!!}

		@include('alerts.success')

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