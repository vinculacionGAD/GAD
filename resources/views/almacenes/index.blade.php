@extends('layouts.app')

@section('content')	

	<div id="msj-update-almacen" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Almacén actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-almacen" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Almacén eliminado correctamente!</strong>
	</div>
	
	@include('almacenes.modal')
	<table class="table">
		<thead>
			<th>Nombre Almacén</th>
			<th>Dirección</th>
			<th>Observación</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptAlmacenes.js')!!}
@endsection