@extends('layouts.app')

@section('content')	
	@include('alerts.success')
	@include('proyectos.modal')	
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
			<th>Presupuesto</th>
			<th>Moneda</th>
			<th>Operaciones</th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptProyectos.js')!!}
@endsection