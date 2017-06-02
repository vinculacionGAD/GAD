@extends('layouts.app')

@section('content')	

	<div id="msj-update-marina" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Marina actualizada correctamente!</strong>
	</div>

	<div id="msj-delete-marina" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Marina eliminada correctamente!</strong>
	</div>

	@include('marinas.modal')
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Marina</h1>
	<br/>
	<table class="table">
		<thead>
			<th>Marina</th>
			<th>Dirección</th>
			<th>Contacto</th>
			<th>Número de Botes</th>
			<th>Número de Personas</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptMarina.js')!!}
@endsection