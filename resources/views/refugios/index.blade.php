@extends('layouts.app')

@section('content')	

	<div id="msj-update-refugio" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Refugio actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-refugio" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Refugio eliminado correctamente!</strong>
	</div>

	@include('refugios.modal')
	<table class="table">
		<thead>
			<th>Nombre Refugio</th>
			<th>Dirección</th>
			<th>Encargado</th>
			<th>Contacto</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptRefugios.js')!!}
@endsection