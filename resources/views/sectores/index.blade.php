@extends('layouts.app')

@section('content')	
	@include('alerts.success')
	@include('sectores.modal')	
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Ubicacion</th>
			<th>Observacion</th>
			<th>Operaciones</th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptSectores.js')!!}
@endsection