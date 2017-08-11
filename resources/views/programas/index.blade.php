@extends('layouts.app')

@section('content')	
	
	<div id="msj-update-programa" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Programa actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-programa" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Programa eliminado correctamente!</strong>
	</div>

	@include('programas.modal')	
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Programas</h1>
	<br/>
	<table id="tablee" class="table">
		<thead>
			<th>Nombre</th>
			<th>Observacion</th>
			<th>Accion</th>
			<th>Reporte</th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptProgramas.js')!!}
@endsection