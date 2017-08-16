@extends('layouts.app')
@section('css')
<!-- iCheck -->
{!!Html::style('plugins/iCheck/skins/flat/green.css')!!}

@endsection
@section('content')

	{!!Form::open(['class'=>'form-horizontal', 'id'=>'frmPersonas', 'method'=>'POST'])!!}

		<div id="msj-insert-persona" class="alert alert-success alert-dismissible" role="alert" style="display: none">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Persona Agregada Correctamente</strong>
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 

		<div class="form-group">
			<div class="col-md-6 col-xs-12">
				<h1 style="font-size: 20px; font-weight: bold; color: black;">Registro de Personas</h1>
			</div>
		</div>
		@include('personas.forms.personas')			

		
		
	{!!Form::close()!!}	
@endsection

@section('js')
<!-- iCheck -->
{!!Html::script('plugins/iCheck/icheck.min.js')!!}
@endsection