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
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Sectores</h1>
	<br/>
	<table id="tablee" class="table table-bordered">
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