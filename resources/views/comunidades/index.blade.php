@extends('layouts.app')

@section('content')	
	@include('alerts.success')
	@include('comunidades.modal')	
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Observación</th>
			<th>Operaciones</th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptComunidades.js')!!}
@endsection


