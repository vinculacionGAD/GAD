@extends('layouts.app')
@section('content')
	{!!Form::open(['class'=>'form-horizontal', 'id'=>'frmAlmacenes', 'method'=>'POST'])!!}

		@include('alerts.success')

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 

		@include('recursos.forms.recursos')			
		@include('almacenes.forms.almacenes')			

		<div class="form-group">
			<div class="col-md-6 col-xs-12">
				{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroAlmacen','class'=>'btn btn-primary'], $secure = null)!!}
			</div>
		</div>
		
	{!!Form::close()!!}		
@endsection