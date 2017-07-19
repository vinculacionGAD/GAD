@extends('layouts.app')

@section('content')	
	
	<div id="msj-update-perdida" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Pérdida actualizada correctamente!</strong>
	</div>

	<div id="msj-delete-perdida" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Pérdida eliminada correctamente!</strong>
	</div>
	<div>
				<ul class="nav navbar-right panel_toolbox">
                        <ul class="nav navbar-right panel_toolbox">                    
                        <a href="/app/crear_reporte_perdida/1" target="bland_" class="moverImprimirFactura  btn btn-success">Imprimir Reporte</a>
                        </ul>
                    </ul>
	</div>

	@include('perdidas.modal')	
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Pérdidas</h1>
	<br/>
	<table class="table">
		<thead>
			<th>Cédula</th>
			<th>Persona</th>
			<th>Descripción</th>
			<th>Monto Estimado</th>
			<th>Fecha Pérdida</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptPerdidas.js')!!}
@endsection