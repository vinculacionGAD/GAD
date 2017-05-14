@extends('layouts.app')

@section('content')	
	
	<div id="msj-update-persona" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Persona actualizada correctamente!</strong>
	</div>

	<div id="msj-delete-persona" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Persona eliminada correctamente!</strong>
	</div>

	@include('personas.modal')	

	<table class="table">
		<thead>
			<th>Cédula</th>
			<th>Nombre Completo</th>
			<th>Fecha Nacimiento</th>
			<th>Teléfono</th>
			<th>Estado Civil</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptPersonas.js')!!}
@endsection