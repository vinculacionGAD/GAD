@extends('layouts.app')

@section('content')	
	
	<div id="msj-update-personal" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Personal actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-personal" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Personal eliminado correctamente!</strong>
	</div>

	@include('personales.modal')	
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Personales</h1>
	<br/>
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
			<th>Departamento</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptPersonales.js')!!}
@endsection