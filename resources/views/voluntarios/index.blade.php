@extends('layouts.app')

@section('content')	

	<div id="msj-update-voluntario" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Voluntario actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-voluntario" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>voluntario eliminado correctamente!</strong>
	</div>

	@include('voluntarios.modal')
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Voluntarios</h1>
	<br/>
	<table id="tablee" class="table-bordered table">
		<thead>
			<th>Voluntario</th>
			<th>Fecha Inicio </th>
			<th>Fecha Fin</th>
			<th>Trabajo</th>
			<th>Pais</th>
			<th>Organizacion</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptVoluntarios.js')!!}
@endsection