@extends('layouts.app')

@section('content')	

	<div id="msj-update-producto" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Producto actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-producto" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Producto eliminado correctamente!</strong>
	</div>

	@include('productos.modal')	
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Fecha Elaboración</th>
			<th>Fecha Caducidad</th>
			<th>Tipo Producto</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptProductos.js')!!}
@endsection