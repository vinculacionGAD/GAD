@extends('layouts.app')

@section('content')	

	<div id="msj-update-sector" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Sector actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-sector" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Sector eliminado correctamente!</strong>
	</div>
	
	@include('sectores.modal')	
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Ubicacion</th>
			<th>Observacion</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptSectores.js')!!}
@endsection