@extends('layouts.app')
@section('content')
 <div class="col-lg-8 col-md-12 col-xs-12 registro">
  <div class="col-lg-8 col-md-12 col-xs-12">
	{!!Form::open(['class'=>'form-horizontal', 'id'=>'frmProgramas', 'method'=>'POST'])!!}

		<div id="msj-insert-programa" class="alert alert-success alert-dismissible" role="alert" style="display: none">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Programa Agregado Correctamente</strong>
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
		<input type="hidden" name="_token" value="id_reporte" id="id_reporte"> 


		<div class="form-group">
			<div class="col-lg-12 col-md-12 col-xs-12">
				<h1 style="font-size: 20px; font-weight: bold; color: black;">Registro de Programas</h1>
			</div>
		</div>

		@include('programas.forms.programas')			

		<div class="form-group">
			<div class="col-md-12 col-xs-12">
				{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroPrograma','class'=>'btn btn-primary'], $secure = null)!!}
			</div>
		</div>
	  </div>		
	{!!Form::close()!!}	
	</div>	
@endsection