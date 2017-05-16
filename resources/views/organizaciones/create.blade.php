@extends('layouts.app')
@section('content')
	{!!Form::open(['class'=>'form-horizontal', 'files'=>true, 'id'=>'frmOrganizaciones', 'method'=>'POST'])!!}

		<div id="msj-insert-organizacion" class="alert alert-success alert-dismissible" role="alert" style="display: none">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Organización Agregada Correctamente</strong>
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 

		<div class="form-group">
			<div class="col-md-6 col-xs-12">
				<h1 style="font-size: 20px; font-weight: bold; color: black;">Registro de Organizaciones</h1>
			</div>
		</div>
		@include('organizaciones.forms.organizaciones')	
		<div class="form-group">
			<div class="col-md-6 col-xs-12">
				{!!Form::label('Logotipo','Logotipo:')!!}
				{!!Form::file('logotipo')!!}		
			</div>	
		</div>
		<div class="form-group">
			<div class="col-md-6 col-xs-12">
				{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroOrganizacion','class'=>'btn btn-primary'], $secure = null)!!}
			</div>
		</div>
		
	{!!Form::close()!!}		
@endsection