@extends('layouts.app')

@section('content')	
	@include('alerts.success')
	@include('organizaciones.modal')	
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Tipo Organización</th>
			<th>Teléfono</th>
			<th>Sitio Web</th>
			<th>Twitter</th>
			<th>Operaciones</th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptOrganizaciones.js')!!}
@endsection