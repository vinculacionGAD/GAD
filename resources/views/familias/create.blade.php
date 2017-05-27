
@extends('layouts.app')
@section('content')
	{!!Form::open(['class'=>'form-horizontal', 'id'=>'frmRegistraFamilia','method'=>'POST'])!!}

		<div id="msj-insert-familia" class="alert alert-success alert-dismissible" role="alert" style="display: none">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Familia Agregada Correctamente</strong>
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
	
		<div class="form-group">
			<div class="col-md-6 col-xs-12">
				<h1 style="font-size: 20px; font-weight: bold; color: black;">Registro de Familias</h1>
			</div>
		</div>	

		<div class="col-md-12 col-sm-12 col-xs-12 registro">
			<div class="col-md-4 col-sm-12 col-xs-12">
				@include('familias.forms.familias')		
			</div>		
			<div class="col-md-4 col-sm-12 col-xs-12">
				@include('salud.forms.salud')	
			</div>	
			<div class="col-md-4 col-sm-12 col-xs-12">
				@include('viviendas.forms.viviendasPersonaHogar')	
				<div class="form-group">
					<div class="col-md-12 col-xs-12">
						{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroFamilia','class'=>'btn btn-primary'], $secure = null)!!}
					</div>
				</div>
			</div>				
		</div>		
	{!!Form::close()!!}		
@endsection