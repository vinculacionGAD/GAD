@extends ('layouts.app')

@section('content')
	
	<div id="msj-update-vivienda" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Vivienda actualizada correctamente!</strong>
	</div>

	<div id="msj-delete-vivienda" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Vivienda eliminada correctamente!</strong>
	</div>

	@include('viviendas.modal')
	<table class="table">
		<thead>
			<th>Tipo de Construcción</th>
			<th>Años de Vida</th>
			<th>Ubicación</th>
			<th></th>
		</thead>
		<tbody id='datos'> </tbody>
	</table>
@endsection

	@section('scripts')
		{!!Html::script('js/scriptViviendas.js')!!}
	@endsection
