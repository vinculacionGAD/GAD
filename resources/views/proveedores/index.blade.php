@extends('layouts.app')

@section('content')	
	@include('alerts.success')
	@include('proveedores.modal')	
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Operaciones</th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptProveedores.js')!!}
@endsection