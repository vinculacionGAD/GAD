@extends ('layouts.app')

@section('content')
	@include('alerts.success')
	@include('viviendas.modal')
	<table class="table">
		<thead>
			<th>Tipo de Construcción</th>
			<th>Años de Vida</th>
			<th>Ubicación</th>
			<th>Operaciones</th>
		</thead>
		<tbody id='datos'> </tbody>
	</table>
@endsection

	@section('scripts')
		{!!Html::script('js/scriptViviendas.js')!!}
	@endsection
