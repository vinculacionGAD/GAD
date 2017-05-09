@extends('layouts.app')

@section('content')	
	@include('alerts.success')
	@include('hospitales.modal')
	<table class="table">
		<thead>
			<th>Nombre del Hospital</th>
			<th>Dirección</th>
			<th>Contacto</th>
			<th>Número de Médicos</th>
			<th>Número de Enfermeros</th>
			<th>Número de Quirófanos</th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptHospitales.js')!!}
@endsection