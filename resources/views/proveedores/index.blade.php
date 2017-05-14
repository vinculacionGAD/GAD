@extends('layouts.app')

@section('content')	

	<div id="msj-update-proveedor" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Proveedor actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-proveedor" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Proveedor eliminado correctamente!</strong>
	</div>

	@include('proveedores.modal')	
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptProveedores.js')!!}
@endsection