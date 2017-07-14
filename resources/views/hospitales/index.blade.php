@extends('layouts.app')

@section('content')	

	<div id="msj-update-hospital" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Hospital actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-hospital" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Hospital eliminado correctamente!</strong>
	</div>
	<div>
				<ul class="nav navbar-right panel_toolbox">
                        <ul class="nav navbar-right panel_toolbox">                    
                        <a href="/app/crear_reporte_hospitales/1" target="bland_" class="moverImprimirFactura  btn btn-success">Imprimir Reporte</a>
                        </ul>
                    </ul>
			</div>

	@include('hospitales.modal')
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Hospitales</h1>
	<br/>
	<table class="table">
		<thead>
			<th>Hospital</th>
			<th>Dirección</th>
			<th>Contacto</th>
			<th>Número de Médicos</th>
			<th>Número de Enfermeros</th>
			<th>Número de Quirófanos</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptHospitales.js')!!}
@endsection