@extends('layouts.app')

@section('content')	
	@include('alerts.success')
	@include('almacenes.modal')
	<table class="table">
		<thead>
			<th>Nombre Almacén</th>
			<th>Dirección</th>
			<th>Observación</th>
			<th>Operaciones</th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptAlmacenes.js')!!}
@endsection