@extends('layouts.app')

@section('content')	

	<div id="msj-update-puntoEncuentro" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Punto de Encuentro actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-puntoEncuentro" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Punto de Encuentro eliminado correctamente!</strong>
	</div>

	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Puntos de Encuentro</h1>
	<br/>
	<table class="table">
		<thead>
			<th>Latitud</th>
			<th>Longitud</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptPuntosEncuentro.js')!!}
@endsection


