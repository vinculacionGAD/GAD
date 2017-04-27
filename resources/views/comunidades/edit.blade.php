@extends('layouts.app')

@section('content')		
	{!!Form::model($comunidad, ['route' => ['comunidades.update', $comunidad->id],'method'=>'PUT' ])!!}
		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
		@include('Comunidades.forms.comunidades')	
		{!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}	

	{!!Form::open(['route' => ['comunidades.destroy', $comunidad->id],'method'=>'DELETE' ])!!}
		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 		
		{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}	
@endsection