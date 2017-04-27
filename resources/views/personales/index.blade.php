@extends('layouts.app')

@section('content')	
	@include('alerts.success')
	
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
			<th>Departamento</th>
			<th>Operaciones</th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptPersonales.js')!!}
@endsection