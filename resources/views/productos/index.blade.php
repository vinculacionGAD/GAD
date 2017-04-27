@extends('layouts.app')

@section('content')	
	@include('alerts.success')
	@include('productos.modal')	
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Fecha Elaboración</th>
			<th>Fecha Caducidad</th>
			<th>Tipo Producto</th>
			<th>Operaciones</th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptProductos.js')!!}
@endsection