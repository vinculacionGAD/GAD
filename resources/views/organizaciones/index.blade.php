@extends('layouts.app')

@section('content')	

	<div id="msj-update-organizacion" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Organización actualizada correctamente!</strong>
	</div>

	<div id="msj-delete-organizacion" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Organización eliminada correctamente!</strong>
	</div>

	@include('organizaciones.modal')
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Organizaciones</h1>
	<br/>
	<table id="tablee" class="table table-bordered">
		<thead>
			<th>Nombre</th>
			<th>Tipo Organización</th>
			<th>Teléfono</th>
			<th>Sitio Web</th>
			<th>Twitter</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptOrganizaciones.js')!!}
@endsection