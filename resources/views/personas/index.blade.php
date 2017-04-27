@extends('layouts.app')

@section('content')	
	@include('alerts.success')
	@include('personas.modal')	
	<table class="table">
		<thead>
			<th>Cédula</th>
			<th>Nombre Completo</th>
			<th>Fecha Nacimiento</th>
			<th>Teléfono</th>
			<th>Estado Civil</th>
			<th>Operaciones</th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptPersonas.js')!!}
@endsection