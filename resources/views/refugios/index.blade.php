@extends('layouts.app')

@section('content')	
	@include('alerts.success')
	@include('refugios.modal')
	<table class="table">
		<thead>
			<th>Nombre Refugio</th>
			<th>Dirección</th>
			<th>Encargado</th>
			<th>Contacto</th>
			<th>Operaciones</th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptRefugios.js')!!}
@endsection