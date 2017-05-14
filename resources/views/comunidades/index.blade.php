@extends('layouts.app')

@section('content')	

	<div id="msj-update-comunidad" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Comunidad actualizada correctamente!</strong>
	</div>

	<div id="msj-delete-comunidad" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Comunidad eliminada correctamente!</strong>
	</div>

	@include('comunidades.modal')	
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Observación</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptComunidades.js')!!}
@endsection


