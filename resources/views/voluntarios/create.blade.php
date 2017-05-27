@extends('layouts.app')
@section('content')
	{!!Form::open(['class'=>'form-horizontal', 'id'=>'frmVoluntarios', 'method'=>'POST'])!!}

		@include('alerts.success')

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 

		<div class="form-group">
			<div class="col-md-6 col-xs-12">
				<h1 style="font-size: 20px; font-weight: bold; color: black;">Registro de Voluntarios</h1>
			</div>
		</div>
		@include('voluntarios.forms.voluntarios')			

		<div class="form-group">
			<div class="col-md-6 col-xs-12">
				{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroVoluntario','class'=>'btn btn-primary'], $secure = null)!!}
			</div>
		</div>
		</div>	
	{!!Form::close()!!}		
@endsection