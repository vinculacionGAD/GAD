@extends('layouts.app')

@section('content')	

	<div id="msj-update-bombero" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Cuerpo de Bomberos actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-bombero" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Cuerpo de Bomberos eliminado correctamente!</strong>
	</div>

	@include('bomberos.modal')
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Cuerpos de Bombero</h1>
	<br/>
	<table class="table">
		<thead>
			<th>Cuerpo de Bombero</th>
			<th>Dirección</th>
			<th>Contacto</th>
			<th>Número de Bomberos</th>
			<th>Número de Carros</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptBomberos.js')!!}
@endsection